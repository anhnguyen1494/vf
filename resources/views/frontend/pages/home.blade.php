@extends('frontend.layout')

@section('meta')
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="">
@endsection

@section('after_styles')
    <link rel="stylesheet" href="{{ asset('/frontend/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/owl/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('/frontend/css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-xl-12 col-lg-12 col-md-12 menu-top d-flex align-items-center justify-content-end">
                <a href="/" class="logo-menu" title="Trang chủ"><img
                            src="{{ asset('/frontend/images/logo-nav-home.png') }}" alt=""></a>
                <a href="/" class="link-menu" title="Trang chủ">Trang chủ</a>
                <a href="/" class="link-menu" title="Tin tức">Tin tức</a>
                <a href="/" class="link-menu" title="Liên hệ">Liên hệ</a>
            </nav>
            <div class="col-xl-12 col-lg-12 col-md-12 first-intro">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 img-fi-mb text-right">
                        <img src="{{ asset('/frontend/images/home/3may.png') }}" alt="" class="d-block w-100">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 text-fi pl-10">
                        <p>Máy pha chế và bán hàng tự động</p>
                        <h1>VUFOOD</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Ut enim ad minim veniam,
                            quis nostrud exercitationullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">
                            Tìm hiểu thêm <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 img-fi text-right">
                        <img src="{{ asset('/frontend/images/home/3may.png') }}" alt="" class="d-block w-100">
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 second-intro">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 img-si d-flex justify-content-center">
                        <img src="{{ asset('/frontend/images/home/1may.png') }}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 text-si pr-10">
                        <h3 class="text-right">Công nghệ <span>VUFOOD</span></h3>
                        <h6 class="text-right"><span>Mang tiện ích đến gần bạn hơn</span></h6>
                        <p>- Quy trình pha chế, bán hàng khép kín và tự động hóa</p>
                        <p>- Màn hình cảm ứng 1 chạm 40 inches</p>
                        <p>- Thanh toán linh hoạt</p>
                        <p>- Tích hợp 3G, quản lý online</p>
                        <p>- Diện tích nhỏ gọn, lắp đặt nhanh chóng</p>
                        <p>- Hoạt động 24/7 không nhân viên</p>
                        <p>- App hỗ trợ người dùng</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 third-intro">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 text-ti pl-10">
                        <h3><span>VUFOOD</span> APP</h3>
                        <h6><span>Tiện lợi mọi lúc mọi nơi</span></h6>
                    </div>
                    <div class="img-ti">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                                <img src="{{ asset('/frontend/images/home/intro4.png') }}" alt="" class="d-block w-100">
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                                <img src="{{ asset('/frontend/images/home/intro1.png') }}" alt="" class="d-block w-100">
                                <div class="desc-img-ti">
                                    <p class="desc-title-img-ti d-flex align-items-center">
                                        <img src="{{ asset('/frontend/images/home/icon-pay.png') }}" alt=""
                                             class="mr-2">
                                        <span>THANH TOÁN</span>
                                    </p>
                                    <p>Thanh toán thuận tiện chỉ cần quẹt QRcode</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                                <img src="{{ asset('/frontend/images/home/intro1.png') }}" alt="" class="d-block w-100">
                                <div class="desc-img-ti">
                                    <p class="desc-title-img-ti d-flex align-items-center">
                                        <img src="{{ asset('/frontend/images/home/icon-buy.png') }}" alt=""
                                             class="mr-2">
                                        <span>ĐẶT MUA TẠI APP</span>
                                    </p>
                                    <p>Menu với 16 lựa chọn khác nhau</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                                <img src="{{ asset('/frontend/images/home/intro3.png') }}" alt="" class="d-block w-100">
                                <div class="desc-img-ti">
                                    <p class="desc-title-img-ti d-flex align-items-center">
                                        <img src="{{ asset('/frontend/images/home/icon-location.png') }}" alt=""
                                             class="mr-2">
                                        <span>TÌM MÁY</span>
                                    </p>
                                    <p>Tìm các địa điểm máy gần nhất</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 fourth-intro">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 invest-4i d-flex justify-content-end text-right">
                        <div class="invest-content-4i">
                            <h3>ĐẦU TƯ <span>VUFOOD</span></h3>
                            <h6><span>Sinh lời ngay hôm nay</span></h6>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua</p>
                            <p class="mt-4">Liên hệ ngay với chúng tôi</p>
                            <p>0876.969.969 <img src="{{ asset('/frontend/images/home/icon-mobile.png') }}" alt=""
                                                 class="ml-2"></p>
                            <p>kinhdoanh@vufood.com.vn <img src="{{ asset('/frontend/images/home/icon-mail.png') }}"
                                                            alt="" class="ml-2"></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6 customer-4i pr-10 text-left">
                        <div class="customer-content-4i">
                            <h3>KHÁCH HÀNG</h3>
                            <h6><span>Chúng tôi luôn quan tâm</span></h6>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua</p>
                            <p class="mt-4">Liên hệ ngay với chúng tôi</p>
                            <p><img src="{{ asset('/frontend/images/home/icon-mobile-w.png') }}" alt="" class="mr-2">0876.969.969
                            </p>
                            <p><img src="{{ asset('/frontend/images/home/icon-mail-w.png') }}" alt="" class="mr-2">hotro@vufood.com.vn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 slider-intro">
                <div class="owl-carousel owl-theme list-item">
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/slider-img.png') }}" alt="Giới thiệu" class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 contact-intro">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 text-ci pl-10">
                        <h3><span>VUFOOD</span> Ở ĐÂU</h3>
                        <h6><span>Chúng tôi chỉ cách bạn vài bước</span></h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua
                        </p>
                        <div class="text-ci-bottom">
                            <p>Số lượng máy: 2500 máy</p>
                            <p>Số tỉnh thành có VUFOOD: 45</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 map-ci">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.785310540992!2d105.82487881493283!3d21.04127458599169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab09b3c7a5e3%3A0x124972f3b711f018!2zNTYgVGjhu6V5IEtodcOqLCBUaHXhu7UgS2h1w6osIFTDonkgSOG7kywgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1556462805533!5m2!1svi!2s"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <footer class="col-xl-12 col-lg-12 col-md-12 pl-10 pr-10 footer d-flex justify-content-between align-items-center">
                <span>Bản quyền thuộc về VuFood ltd</span>
                <span>Địa chỉ: 56 Thụy Khê, Tây Hồ, Hà Nội, Việt Nam</span>
            </footer>
        </div>
    </div>

    <!-- The Modal IMG-->
    <div id="md-img" class="modal-img">

        <!-- The Close Button -->
        <span class="close-img">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content-img" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption-img"></div>
    </div>
@endsection

@section('after_scripts')
    <script src="{{ asset('/frontend/owl/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.list-item').owlCarousel({
                stagePadding: 50,
                loop: true,
                items: 4,
                margin: 10,
                responsiveClass: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        dots: false
                    },
                    500: {
                        items: 2,
                        dots: false
                    },
                    992: {
                        items: 3,
                        dots: false
                    },
                    1200: {
                        items: 4,
                        dots: false
                    }
                }
            });
            $('.slider-intro').on('click','.overlay-item',function () {
                var _img = $(this).prev();
                var src = _img.attr('src');
                var alt = _img.attr('alt');
                $('#md-img').css('display','block');
                $('#img01').attr('src',src);
                $('#caption-img').html(alt);
            });
            $('.close-img').click(function () {
                $('#md-img').css('display','none');
            });
        });
    </script>
@endsection