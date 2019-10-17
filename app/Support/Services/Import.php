<?php

namespace App\Support\Services;

use \stdClass;

/**
 * Class Import
 * @package App\Support\Services
 */
class Import {

    /**
     * @var
     */
    protected $file;

    /**
     * Import constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * @param $file
     * @param $format
     * @return array
     */
    public function import($file, $format)
    {
        if($format == 'csv'){
            return $this->importFileCSV($file);
        } else if($format == 'xml'){
            return $this->importFileXML($file);
        }
        return [];
    }

    /**
     * @param $newFile
     * @return array
     */
    public function importFileCSV($newFile = null)
    {
        $i = 0;
        $collection = array();
        $columns = array();
        $prepare = array();
        //$file = fopen($this->file, 'r');
        $file = $this->file ? fopen($this->file, 'r') : fopen($newFile, 'r');

        while(($data = fgetcsv($file, 1000, ';')) !== false){
            if(!$i){
                $columns = array_values($data);
            } else {
                $collection[$i] = $data;
            }
            $i++;
        }

        foreach($collection as $key => $row){
            $obj = new StdClass;
            for ($ic = 0; $ic <= count($columns) - 1; $ic++) {
                if($ic == 0){
                    $value = str_replace('"', '',  str_replace('\ufeff', '', json_encode($columns[$ic])));
                    $col = (string) $value;

                } else {
                    $col = (string)$columns[$ic];
                }

                $index = strpos($row[$ic], '&');
                $value = $index === false ? $row[$ic] : substr_replace($row[$ic], '', $index, 1);

                $obj->$col = (string) $value;
            }
            array_push($prepare, $obj);
        }

        return $prepare;
    }

    /**
     * @param $newFile
     * @return array
     */
    public function importFileXML($newFile = null)
    {
        //$file = $this->file ? simplexml_load_file($this->file) : simplexml_load_file($newFile);
        //$xml = simplexml_load_file($file);
        $xml = simplexml_load_file($newFile);

        $collection = (array) $xml;
        $index = array_key_first($collection);

        $newList = [];

        foreach($xml as $row){
            $obj = new StdClass;
            $obj = $row;
            $obj->document_type = $index;

            array_push($newList, $obj);
        }

        return $newList;
    }

}
