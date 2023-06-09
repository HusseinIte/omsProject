<?php


namespace App\Services;


use App\Models\Image\Image;
use App\Models\Image\ProductImage;
use Illuminate\Http\Request;
use function PHPUnit\Framework\size;

class ImageService
{
//    upload one image
    public function uploadPublicImage(Request $request)
    {
        $file = $request->file('images');
        $name = $file->hashName();
        $path = $file->storeAs('images', $name, 'my_files');
        return Image::create([
            'name' => $name
        ]);
    }

// upload multiple image for products
//    public function uploadProductImage(Request $request)
//    {
//        $files = $request->file('images');
//        foreach ($files as $image) {
//            $name = $image->hashName();
//            $path = $image->storeAs('ProductsImage', $name, 'my_files');
//            ProductImage::create([
//                'name' => $name,
//                'product_id' => $request->id
//            ]);
//        }
//
//    }
}
