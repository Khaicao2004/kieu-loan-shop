@extends('client.layouts.master')

@section('title')
    Chi tiết sản phẩm
@endsection
@section('content')
    @include('client.layouts.components.breadcrumb', [
        'pageName' => 'Chi tiết sản phẩm',
        'pageTitle' => 'Chi tiết sản phẩm',
    ])
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($galleries as $id => $image)
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                        <div class="product__thumb__pic set-bg" data-setbg="{{ Storage::url($image) }}">
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    @php
                                        $url = $product->img_thumbnail;
                                        if (!Str::contains($url, 'http')) {
                                            $url = Storage::url($url);
                                        }
                                    @endphp
                                    <img src="{{ $url }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12" style="padding-left: 40px;">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="product__details__text">
                                    <h4>{{ $product->name }}</h4>
                                    <h3>
                                        {{ number_format($product->price_sale, 0, ',', '.') }}đ
                                        <span> {{ number_format($product->price_regular, 0, ',', '.') }}đ</span>
                                    </h3>
                                    <p>{{ $product->description }}</p>
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="product__details__option">
                                            <div class="product__details__option__size">
                                                @foreach ($sizes as $id => $name)
                                                    <span>Size: <input type="radio" name="product_size_id"
                                                            value="{{ $id }}">{{ $name }}</span>
                                                @endforeach
                                            </div>
                                            <div class="product__details__option__color mt-3">
                                                @foreach ($colors as $id => $name)
                                                    <span>Color: <input type="radio" name="product_color_id"
                                                            value="{{ $id }}">{{ $name }}</span>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product__details__cart__option">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="number" name="quantity" min="1" value="1">
                                                </div>
                                            </div>
                                            <button type="submit" class="primary-btn mt-3">add to cart</button>
                                        </div>
                                    </form>
                                    <div class="product__details__last__option">
                                        <ul>
                                            <li><span>SKU:</span> {{ $product->sku }}</li>
                                            <li><span>Cata:</span> {{ $product->catalogue->name }}</li>
                                            <li><span>Tag:</span>
                                                @foreach ($product->tags as $item)
                                                    {{ $item->name }}
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Nội
                                        dung</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Chất liệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">
                                        Hướng dẫn sử dụng</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        @php
                                            $contents = explode("\n", $product->content);
                                        @endphp

                                        @foreach ($contents as $content)
                                            <p>{{ $content }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <p>{!! nl2br(e($product->material)) !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p>{!! nl2br(e($product->user_manual)) !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản phẩm liên quan</h3>
                </div>
            </div>
            <div class="row product__filter" id="MixItUpA8E115">
                @foreach ($relatedProducts as $item)
                    @php
                        $url = $item->img_thumbnail;
                        if (!Str::contains($url, 'http')) {
                            $url = Storage::url($url);
                        }
                    @endphp
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{$url}}"
                                style="background-image: url(&quot;img/product/product-1.jpg&quot;);">
                                @if ($item->is_new == true)
                                <span class="label">New</span>             
                                @endif
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $item->name }}</h6>
                                <a href="{{ route('product.detail', $item->slug) }}" class="add-cart">+ Xem chi tiết</a>
                                @if ($item->price_sale)
                                    <h5>
                                        {{ number_format($item->price_sale, 0, ',', '.') }}đ
                                    </h5>
                                @else
                                    <h5>
                                        {{ number_format($item->price_regular, 0, ',', '.') }}đ
                                    </h5>
                                @endif
                               
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
@endsection
