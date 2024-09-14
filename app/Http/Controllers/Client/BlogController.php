<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::query()->latest('id')->paginate(6);
        return view('client.blog', compact('blogs'));
    }
    public function blogDetail(string $id){
        $blog = Blog::where('id', $id)->first();
        return view('client.blog-details', compact('blog'));
    }
}
