<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ImageController extends Controller
{
    public function destroy(Image $image, $model, string $type = 'services')
    {
        self::deleteImage($image);
        return redirect()->route($type . '.edit', $model);
    }
    public static function deleteImage($image)
    {
        if (file_exists(public_path($image->url)))
            File::delete(public_path($image->url));
        $image->delete();
    }
    public static function storeImage($file, $type = 'services')
    {
        try {
            $extension = $file->getClientOriginalExtension();
            $filetype = $file->getMimeType();
            if (!in_array(substr($filetype, 0, 5), ['image', 'video']))
                throw new \Exception('File not supported');
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            if (strtolower($extension) == 'heic') {
                $manager = new ImageManager(Driver::class);
                $image = $manager->read($file);
                $filename = uniqid() . time() . rand(10, 1000000) . '.jpg';
                $image->toJpeg()->save('images/' . $type . $filename);
            } else {
                $filename = uniqid() . time() . rand(10, 1000000) . '.' . $extension;
                $file->move('images/' . $type, $filename);
            }
            return $filename;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
