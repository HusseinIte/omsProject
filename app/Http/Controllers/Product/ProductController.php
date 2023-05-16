<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\ProductAttribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function testProduct(Request $request)
    {
        $attributes = $request->input('attributes');
        foreach ($attributes as $key => $value) {
            ProductAttribute::create([
                'product_id' => 1,
                'productAttribute' => $key,
                'productValue' => $value
            ]);
        }
    }
}
