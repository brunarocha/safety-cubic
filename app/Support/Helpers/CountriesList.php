<?php

namespace App\Support\Helpers;

use PragmaRX\Countries\Package\Countries;

/**
 * Class CountriesList
 * @package App\Support\Helpers
 */
class CountriesList {

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function countries()
    {
        $countries = new Countries();
        $all = $countries->all()->sortBy('cca3');
        $result = [];

        foreach ($all as $key => $value) {
            array_push($result, (object) ['initials' => $key, 'country' => $value->name->common,
                'initials_country' => $key.' - '.$value->name->common, 'currency' => $value['currencies']]);
        }

        return collect($result);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function currencies()
    {
        $countries = new Countries();
        $result = [];

        foreach ($countries->all()->sortBy('cca3') as $key => $value) {
            isset($value['currencies'][0]) ? array_push($result, (object)
            ['currency' => $value['currencies'][0], 'country' => $key, 'country_currency' => $key.' - '.$value['currencies'][0]]) : null;
        }

        return collect($result);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function allCurrencies()
    {
        $countries = new Countries();
        $result = [];

        foreach ($countries->all()->sortBy('cca3') as $key => $value) {
            if(isset($value['currencies'][0])){
                array_push($result, $value['currencies'][0]);
            }
        }

        return collect($result)->map(function ($name) {
            return $name;
        })->unique()->toArray();
    }

    /**
     * @param $country
     * @return mixed
     */
    public static function currencyCountry($country)
    {
        $countries = new Countries();
        return $countries->all()->$country->currencies[0];
    }

    /**
     * @param $country
     * @return mixed
     */
    public static function flagCountry($country)
    {
        $countries = new Countries();
        return $countries->all()->$country->flag->flag_icon;
    }
}
