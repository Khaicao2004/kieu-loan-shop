@extends('client.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('content')
    <!-- Header Section End -->

    @include('client.layouts.partials.banner')

    <!-- Product Section Begin -->
    <section class="product spad mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Bán chạy</li>
                        <li data-filter=".new-arrivals">Sản phẩm mới</li>
                        <li data-filter=".hot-sales">Sản phẩm Sale</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach ($productNews as $new)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            @php
                                $url = $new->img_thumbnail;
                                if (!Str::contains($url, 'http')) {
                                    $url = Storage::url($url);
                                }
                            @endphp
                            <div class="product__item__pic set-bg" data-setbg="{{ $url }}">
                                <span class="label">New</span>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $new->name }}</h6>
                                <a href="{{ route('product.detail', $new->slug) }}" class="add-cart">+ Xem chi tiết</a>
                                @if ($new->price_sale)
                                    <h5>
                                        {{ number_format($new->price_sale, 0, ',', '.') }}đ
                                    </h5>
                                @else
                                    <h5>
                                        {{ number_format($new->price_regular, 0, ',', '.') }}đ
                                    </h5>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($productSales as $sale)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item sale">
                            @php
                                $url = $sale->img_thumbnail;
                                if (!Str::contains($url, 'http')) {
                                    $url = Storage::url($url);
                                }
                            @endphp
                            <div class="product__item__pic set-bg" data-setbg="{{ $url }}">
                                <span class="label">Sale</span>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $sale->name }}</h6>
                                <a href="{{ route('product.detail', $sale->slug) }}" class="add-cart">+ Xem chi tiết</a>
                                @if ($sale->price_sale)
                                    <h5>
                                        {{ number_format($sale->price_sale, 0, ',', '.') }}đ
                                    </h5>
                                @else
                                    <h5>
                                        {{ number_format($sale->price_regular, 0, ',', '.') }}đ
                                    </h5>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->


    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>{{ $hotDeal->catalogue->name }}</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        @php
                            $url = $hotDeal->img_thumbnail;
                            if (!Str::contains($url, 'http')) {
                                $url = Storage::url($url);
                            }
                        @endphp
                        <img src="{{$url}}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Giảm</span>
                            <h5>{{ number_format($hotDeal->price_regular - $hotDeal->price_sale) }} VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Giảm giá sốc</span>
                        <h2>Nhanh tay mua hàng</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="{{ route('product.detail', $hotDeal->slug) }}" class="primary-btn">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg"
                            data-setbg="/client/img/chulam/456201733_7957600444359344_8380231337377447825_n.jpg"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="/client/img/chulam/454979098_1197335834939264_328595561756446557_n.jpg"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="/client/img/chulam/456201733_7957600444359344_8380231337377447825_n.jpg"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="/client/img/chulam/454979098_1197335834939264_328595561756446557_n.jpg"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="/client/img/chulam/456201733_7957600444359344_8380231337377447825_n.jpg"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="/client/img/chulam/454979098_1197335834939264_328595561756446557_n.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <h3>#Mỹ phẩm thời thượng</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->


    <!-- Latest Blog Section Begin -->
    @include('client.layouts.partials.blog')
    <!-- Latest Blog Section End -->
@endsection
