<?php

namespace App\Http\Controllers\Client;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $productNews = Product::where('is_new', true)->get();
        $productSales = Product::where('is_hot_deal', true)->get();

        // dd($productSales->toArray());
        return view('client.index',compact('productNews','productSales'));
    }
    public function detail($slug){
        $product = Product::query()->with('variants')->where('slug', $slug)->first();
        $colors = ProductColor::query()->pluck('name', 'id')->all();
        $sizes = ProductSize::query()->pluck('name', 'id')->all();
        // dd($product);

        return view('client.shop-details', compact('product','colors','sizes'));

    } 
}
