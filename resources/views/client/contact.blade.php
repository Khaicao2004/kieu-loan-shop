@extends('client.layouts.master')
@section('title')
    Liên hệ
@endsection
@section('content')
    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d5345.386705038213!2d105.68434680137572!3d18.674799224359536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sus!4v1725678021174!5m2!1sen!2sus"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Thông tin liên hệ</span>
                            <h2>Liên hệ</h2>
                            <p>Họ và tên: Lê Thị Loan</p>
                            <p>Số điện thoại: 0941543789</p>
                            <p>Email: kieuloanxunghe3838@gmail.com</p>
                            <p>Địa chỉ: Số nhà LK17-16, đường Nguyễn Khiểm, Khu đô thị Xuân An, TDP7, Thị Trấn Xuân An,
                                Huyện Nghi Xuân, Tỉnh Hà Tĩnh, Việt Nam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
