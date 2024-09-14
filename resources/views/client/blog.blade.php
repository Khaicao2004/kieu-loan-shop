@extends('client.layouts.master')
@section('title')
    Tin tức
@endsection
@section('content')
@include('client.layouts.components.breadcrumb', [
    'pageName' => 'Tin tức',
    'pageTitle' => 'Tin tức',
])
 <section class="blog spad">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ Storage::url($blog->image) }}"></div>
                    <div class="blog__item__text">
                        <span><img src="/client/img/icon/calendar.png" alt="">{{ $blog->created_at->format('d/m/Y') }}</span>
                        <h5>{{ $blog->name }}</h5>
                        <a href="{{ route('blog.detail', $blog->id) }}">Đọc thêm</a>
                    </div>
                </div>
            </div>      
            @endforeach
        </div>

        {{ $blogs->links() }}
    </div>
</section>
@endsection
