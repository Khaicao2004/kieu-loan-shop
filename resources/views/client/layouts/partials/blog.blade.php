<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Tin tức</span>
                    <h2>Mỹ phẩm chất lượng cao</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ Storage::url($blog->image) }}"></div>
                    <div class="blog__item__text">
                        <span><img src="/client/img/icon/calendar.png" alt="">{{ $blog->created_at->format('d/m/Y') }}</span>
                        <h5>{{  $blog->name }}</h5>
                        <a href="{{ route('blog.detail', $blog->id) }}">Đọc thêm</a>
                    </div>
                </div>
            </div>           
            @endforeach
        </div>
    </div>
</section>