@extends('client.layouts.master')
@section('title')
    Chi tiết tin tức
@endsection
@section('content')
    @include('client.layouts.components.breadcrumb', [
        'pageName' => 'Chi tiết tin tức',
        'pageTitle' => 'Chi tiết tin tức',
    ])
    <!-- Blog Details Hero Begin -->
    <section class=" spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>{{ $blog->name }}</h2>
                        <ul>
                            <li>{{ $blog->created_at->format('d/m/Y') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad mt-1">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->name }}">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>{!! $blog->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection
