@extends('admin.layouts.master')

@section('title')
    Cập nhật bài viết: {{ $blog->name }}
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1"> Cập nhật bài viết: {{ $blog->name }}</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-12">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $blog->name }}">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control mb-3" id="image" name="image">
                                    <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->name }}" width="100px"
                                        height="100px">
                                </div>
                                <!--end col-->
                                <div class="col-12">
                                    <div class="mt-3">
                                        <label class="form-label" for="content">Content</label>
                                        <textarea class="form-control" id="content" name="content">{{ $blog->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div><!-- end card header -->
                </div>
            </div>
            <!--end col-->
        </div>
    </form>
@endsection

@section('script-libs')
    <script src="{{ asset('theme/admin/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
@endsection

@section('scripts')
    <script>
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
