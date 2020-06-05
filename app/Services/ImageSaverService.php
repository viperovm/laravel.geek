<?php


namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImageSaverService
{

    private $img_type = [
        1 => 'gif',
        2 => 'jpg',
        3 => 'png',
        4 => 'swf',
        5 => 'psd',
        6 => 'bmp',
        7 => 'tiff',
        8 => 'tiff',
        9 => 'jpc',
        10 => 'jp2',
        11 => 'jpx',
        12 => 'jb2',
        13 => 'swc',
        14 => 'iff',
        15 => 'wbmp',
        16 => 'xbm',
        17 => 'ico',
        18 => 'webp'
    ];

    public function getNewsImg($url, $name)
    {
        if ($url == null) {
            return null;
        } else {
            $contents = file_get_contents($url);
            $ext = '.' . $this->img_type[exif_imagetype($url)];
            $file_name = $name . $ext;
            Storage::put('/public/images/' . $file_name, $contents);
            $img = Image::make($url);
            $img->fit(300, 300);
            Storage::put('/public/images/resized/thumb_square/' . $file_name, $img->stream()->__toString());
            $img = Image::make($url);
            $img->fit(640, 480);
            Storage::put('/public/images/resized/thumb_43/' . $file_name, $img->stream()->__toString());
            $img = Image::make($url);
            $img->fit(255, 144);
            Storage::put('/public/images/resized/thumb_169/' . $file_name, $img->stream()->__toString());
            $img = Image::make($url);
            $img->fit(730, 346);
            Storage::put('/public/images/resized/thumb_169_big/' . $file_name, $img->stream()->__toString());

            return $file_name;

        }
    }
}
