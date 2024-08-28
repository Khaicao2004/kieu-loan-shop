@extends('client.layouts.master')

@section('title')
   Chi tiết sản phẩm
@endsection
@section('content')
@include('client.layouts.components.breadcrumb', ['pageName' => 'Chi tiết sản phẩm', 'pageTitle' => 'Chi tiết sản phẩm'])
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12" style="padding-left: 40px;">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="product__details__text">
                                    <h4>Mỹ phẩm</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span> - 5 Reviews</span>
                                    </div>
                                    <h3>500.000 VNĐ <span> 800.000</span></h3>
                                    <p>Mô tả ngắn sản phẩm</p>
                                    <div class="product__details__option">
                                        <div class="product__details__option__size">
                                            <span>Size:</span>
                                            <label for="xxl">xxl
                                                <input type="radio" id="xxl">
                                            </label>
                                            <label class="active" for="xl">xl
                                                <input type="radio" id="xl">
                                            </label>
                                            <label for="l">l
                                                <input type="radio" id="l">
                                            </label>
                                        </div>
                                        <div class="product__details__option__color mt-3">
                                            <span>Color:</span>
                                            <label class="c-1" for="sp-1">
                                                <input type="radio" id="sp-1">
                                            </label>
                                            <label class="c-2" for="sp-2">
                                                <input type="radio" id="sp-2">
                                            </label>
                                            <label class="c-3" for="sp-3">
                                                <input type="radio" id="sp-3">
                                            </label>
                                            <label class="c-4" for="sp-4">
                                                <input type="radio" id="sp-4">
                                            </label>
                                            <label class="c-9" for="sp-9">
                                                <input type="radio" id="sp-9">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="product__details__cart__option">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                        <a href="#" class="primary-btn mt-3">add to cart</a>
                                    </div>
                                    <div class="product__details__last__option">
                                        <ul>
                                            <li><span>SKU:</span> 3812912</li>
                                            <li><span>Categories:</span> Clothes</li>
                                            <li><span>Tag:</span> Clothes, Skin, Body</li>
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
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Mô tả</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Mô tả dài</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Sản phẩm</h5>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................</p>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                            </p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Sản phẩm</h5>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................</p>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <p class="note">Mô tả dài</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Sản phẩm</h5>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................</p>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                            </p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Sản phẩm</h5>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................</p>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                            </p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Mô tả dài</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Sản phẩm</h5>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................</p>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                            </p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Sản phẩm</h5>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................</p>
                                            <p>Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                                Cực kỳ chất lượng nhé mua đi ........................................
                                            </p>
                                        </div>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-1.jpg" style="background-image: url(&quot;img/product/product-1.jpg&quot;);">
                            <span class="label">New</span>
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-2.jpg" style="background-image: url(&quot;img/product/product-2.jpg&quot;);">
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-3.jpg" style="background-image: url(&quot;img/product/product-3.jpg&quot;);">
                            <span class="label">Sale</span>
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-4.jpg" style="background-image: url(&quot;img/product/product-4.jpg&quot;);">
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-5.jpg" style="background-image: url(&quot;img/product/product-5.jpg&quot;);">
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-13">
                                    <input type="radio" id="pc-13">
                                </label>
                                <label class="active black" for="pc-14">
                                    <input type="radio" id="pc-14">
                                </label>
                                <label class="grey" for="pc-15">
                                    <input type="radio" id="pc-15">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-6.jpg" style="background-image: url(&quot;img/product/product-6.jpg&quot;);">
                            <span class="label">Sale</span>
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-7.jpg" style="background-image: url(&quot;img/product/product-7.jpg&quot;);">
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="/client/img/product/product-8.jpg" style="background-image: url(&quot;img/product/product-8.jpg&quot;);">
                            <ul class="">
                                <li><a href="#"><img src="img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="height: 260px;"></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>500.000 VNĐ</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Section End -->
    
@endsection