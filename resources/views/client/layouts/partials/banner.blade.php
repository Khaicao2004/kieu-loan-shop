    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach ($products as $product)
                @php
                    $url = $product->img_thumbnail;
                    if (!Str::contains($url, 'http')) {
                        $url = Storage::url($url);
                    }
                @endphp
                <div class="hero__items set-bg" data-setbg="{{$url}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-8">
                                <div class="hero__text">
                                    <h6>{{ $product->catalogue->name }}</h6>
                                    <h2>{{ $product->name }}</h2>
                                    <p>{{ $product->description }}</p>
                                    <a href="{{ route('product.detail', $product->slug) }}" class="primary-btn">Mua ngay<span class="arrow_right"></span></a>
                                    <div class="hero__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->
