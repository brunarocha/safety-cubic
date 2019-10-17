<?php
/**
 * Upload.php
 *
 * @author Breno Pereira <breno.pereira@nextem.com.br>
 * @package hofund
 */

namespace App\Support\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class Upload
 * @package App\Support\Services
 */
class Upload {
    /**
     * @var
     */
    protected $path;
    protected $file;

    /**
     * Upload constructor.
     * @param $path
     * @param $file
     */
    public function __construct($path, $file)
    {
        $this->path = $path;
        $this->file = $file;
    }

    /**
     * @return \Intervention\Image\Image
     */
    private function prepareFile()
    {
        return Image::make($this->file)->fit(250, 250, function($constraint){
            $constraint->aspectRatio();
        })->encode();
    }

    /**
     * @return mixed
     */
    public function uploadFile()
    {
        $upload = Storage::put($this->path, $this->file);
        return Storage::url($upload);
    }
}