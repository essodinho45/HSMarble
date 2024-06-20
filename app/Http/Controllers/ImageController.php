<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

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
        $extension = $file->getClientOriginalExtension();
        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        if (!in_array($extension, ['png', 'jpg', 'jpeg']))
            throw new \Exception('Image file not supported');
        $name = $filename . time() . '.' . $extension;
        $file->move('images/' . $type, $name);
        return $name;
    }
}
