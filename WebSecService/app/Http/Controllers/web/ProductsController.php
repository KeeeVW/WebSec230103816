<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function list()
    {
        $products = [
            (object)['id' => 1, 'code' => 'TV01', 'name' => 'LG TV 50"', 'model' => 'LG8768787', 'photo' => 'lgtv50.jpg', 'description' => 'High-quality LG TV'],
            (object)['id' => 2, 'code' => 'RF01', 'name' => 'Toshiba Refrigerator 14"', 'model' => 'TS76634', 'photo' => 'tsrf50.jpg', 'description' => 'Energy-efficient fridge'],
        ];

        return view('products.list', compact('products'));
    }
}
