<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogController;
use App\Http\Requests\UpdateBlogController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::query()->get();
        return view('admin.blogs.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogController $request)
    {
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put('blogs', $request->file('image'));
        }
        Blog::query()->create($data);
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogController $request, Blog $blog)
    {
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put('blogs', $request->file('image'));
        }
        $currentImage = $blog->image;
        $blog->update($data);
        if($request->hasFile('image') && Storage::exists($currentImage)){
            Storage::delete($currentImage);
        }
        return back()->with('success', 'Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        if($blog->image && Storage::exists($blog->image)){
            Storage::delete($blog->image);
        }
        return back()->with('success', 'Xóa bài viết thành công');

    }
}
