@extends('frontend.layout')
@section('title')
    Liên hệ
@endsection
@section('meta')
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Vufood - Liên hệ"/>
    <meta property="og:image" content="{{ asset('/frontend/images/fb_vufood_2.jpg') }}"/>
    <meta property="og:description" content="">
@endsection

@section('after_styles')
    <link href="{{ asset('/frontend/css/contact.css').'?t='.time() }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    @include('frontend.includes.menu')
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-12 text-center pt-5 pb-5 customer">
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
            <div class="col-xl-12 col-lg-12 col-12 text-center pt-5 pb-5 invest">
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
            <div class="col-xl-12 col-lg-12 col-md-12 form-register">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 fr-img text-right pr-5">
                        <img src="{{ asset('/frontend/images/contact/may-pha-che-1.png') }}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 fr-register">
                        <form action="{{ route('contact.store') }}" method="post" role="form" class="col-xl-9 col-lg-9 col-12 form-re">
                            <h3 class="pb-3 border-bottom mb-3 mt-5">ĐĂNG KÝ TƯ VẤN</h3>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="full_name" id="" placeholder="Họ và tên " required value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="" placeholder="Email " required value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone" id="" placeholder="Số điện thoại" required value="{{ old('phone') }}">
                                <span style="color: red">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="Hà Nội" id="location_hn" required> <label for="location_hn"> Hà Nội</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="TP Hồ Chí Minh" id="location_hcm" required> <label for="location_hcm"> TP Hồ Chí Minh</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="Đà Nẵng" id="location_dn" required> <label for="location_dn"> Đà Nẵng</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="Tỉnh thành khác" id="location_khac" required> <label for="location_khac"> Tỉnh thành khác</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-xl-12 col-lg-12 col-12">ĐĂNG KÝ NHẬN TƯ VẤN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.includes.footer')
@endsection

@section('after_scripts')
    <script src="{{ asset('/frontend/owl/js/owl.carousel.min.js') }}"></script>
    <script>
        function OpenWindow(href, width, height, name) {
            var screenLeft = 0, screenTop = 0;
            if (!name) name = 'MyWindow';
            if (!width) width = 600;
            if (!height) height = 250;
            var defaultParams = {};
            if (typeof window.screenLeft !== 'undefined') {
                screenLeft = window.screenLeft;
                screenTop = window.screenTop;
            } else if (typeof window.screenX !== 'undefined') {
                screenLeft = window.screenX;
                screenTop = window.screenY;
            }
            var features_dict = {
                toolbar: 'no',
                location: '0',
                left: screenLeft + ($(window).width() - width) / 2,
                top: screenTop + ($(window).height() - height) / 2,
                status: 'no',
                menubar: 'no',
                scrollbars: 'yes',
                resizable: 'yes',
                width: width,
                height: height
            };
            features_arr = [];
            for (var k in features_dict) {
                features_arr.push(k + '=' + features_dict[k]);
            }
            features_str = features_arr.join(',');
            window.open(href, name, features_str);
        }
    </script>
@endsection