<?php

namespace App\Http\Controllers\Client;

use App\Models\Catalogue;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShopController extends Controller
{
    public function shop(string $id = null)
    {

        if ($id) {
            $products = Product::where('catalogue_id', $id)->latest('id')->paginate(9);
        } else {
            $products = Product::query()->latest('id')->paginate(9);
        }
        $catalogues = Catalogue::query()->withCount('products')->get();
        $colors = ProductColor::query()->withCount('variants')->get();
        $sizes = ProductSize::query()->withCount('variants')->get();
        $tags = Tag::query()->pluck('name','id');
        // dd($colors->toArray());
        return view('client.shop', compact('catalogues', 'products', 'colors', 'sizes','tags'));
    }
    public function filter(Request $request)
    {
        // dd($request->all());
        // $products = Product::query()->latest('id')->paginate(9);
        $sizes = $request->size;
        $colors = $request->color;

        $query = Product::with('variants');

        if ($sizes && $colors) {
            $query->whereHas('variants', function ($q) use ($sizes, $colors) {
                $q->whereIn('product_size_id', $sizes)
                    ->whereIn('product_color_id', $colors);
            });
        } else if ($sizes) {
            $query->whereHas('variants', function ($q) use ($sizes) {
                $q->whereIn('product_size_id', $sizes);
            });
        } else if ($colors) {
            $query->whereHas('variants', function ($q) use ($colors) {
                $q->whereIn('product_color_id', $colors);
            });
        }

        $products = $query->paginate(9);
        // ->paginate(9);
        // dd($products->toArray());
        $catagories = Catalogue::query()->withCount('products')->get();
        $colors = ProductColor::query()->withCount('variants')->get();
        $sizes = ProductSize::query()->withCount('variants')->get();
        return view('client.shop', compact('catagories', 'products', 'colors', 'sizes'));
    }
}
