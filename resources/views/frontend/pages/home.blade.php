@extends('frontend.layout')

@section('title')
    Máy Pha Chế Bán Hàng Tự Động #1 Việt Nam
@endsection

@section('meta')
    <meta name="description"
          content="VuFood cung cấp hệ thống máy pha chế bán hàng tự động chuyên nghiệp #1 Việt Nam.  ✅Tiết kiệm thời gian quản lý, ✅Tiết kiệm chi phí nhân lực,chi phí mặt bằng ✅Tự động báo cáo doanh thu, ✅ Hoạt động 24/7 ">
    <meta name="keywords"
          content="máy bán hàng tự động, máy pha chế bán hàng tự động, máy bán hàng tự động, máy bán nước tự động, máy bán cafe tự động, máy pha chế tự động, máy pha cafe tự động, máy pha chế cafe, giải pháp kinh doanh, giải pháp máy bán hàng, giải pháp kinh doanh tự động">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="VuFood - Máy Pha Chế Bán Hàng Tự Động #1 Việt Nam"/>
    <meta property="og:image" content="{{ asset('/frontend/images/fb_vufood.jpg') }}"/>
    <meta property="og:description"
          content="VuFood cung cấp hệ thống máy pha chế bán hàng tự động chuyên nghiệp #1 Việt Nam.  ✅Tiết kiệm thời gian quản lý, ✅Tiết kiệm chi phí nhân lực,chi phí mặt bằng ✅Tự động báo cáo doanh thu, ✅ Hoạt động 24/7 ">
@endsection

@section('after_styles')
    <link rel="stylesheet" href="{{ asset('/frontend/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/owl/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('/frontend/css/home.css').'?t='.time() }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    @include('frontend.includes.menu')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 first-intro">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 img-fi-mb text-right">
                        <img src="{{ asset('/frontend/images/home/may-pha-che-3.png') }}" alt="" class="d-block w-100">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 text-fi pl-10">
                        <p>Máy pha chế và bán hàng tự động</p>
                        <h1>VUFOOD</h1>
                        <p>
                            Sứ mệnh ngay từ khi thành lập của VuFood là trở thành nhà cung cấp giải pháp máy pha chế bán
                            hàng tự động tốt nhất toàn Đông Nam Á. Chúng tôi giúp những người quản lý tối ưu thời gian
                            quản lý và doanh thu, tiết kiệm tối đa chi phí.
                        </p>
                        <a class="btn btn-primary" href="#" role="button">
                            Tìm hiểu thêm <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 img-fi text-right">
                        <img src="{{ asset('/frontend/images/home/may-pha-che-3.png') }}" alt="" class="d-block w-100">
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 second-intro">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 img-si d-flex justify-content-center">
                        <img src="{{ asset('/frontend/images/home/may-pha-che-2.png') }}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 text-si pr-10">
                        <h3 class="text-right">Công nghệ <span>VUFOOD</span></h3>
                        <h6 class="text-right"><span>Mang tiện ích đến gần bạn hơn</span></h6>
                        <p>- Menu lên tới 16 món, có thể chỉnh niêm yết giá</p>
                        <p>- Quy trình hoàn toàn tự động và khép kín</p>
                        <p>- Nhận đồ uống chỉ trong vòng 30-60 giây</p>
                        <p>- Thanh toán bằng tiền mặt, hỗ trợ các cổng thanh toán điện tử</p>
                        <p>- Tự động vệ sinh và báo lỗi lên hệ thống (nếu có)</p>
                        <p>- Quản trị trực tuyến 24/7</p>
                        <p>- Diện tích nhỏ gọn chỉ 0,72 m2</p>
                        <p>- Tích hợp mobile app hỗ trợ người dùng</p>
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
                            <p class="mt-4">Vufood luôn mang tới những sản phẩm tốt nhất, công nghệ hiện đạt nhất tới
                                người dùng. Chúng tôi cam kết làm hài lòng mọi khách hàng</p>
                            <p class="mt-4">Hà Nội: số 2 Ngõ 64 phố Võng Thị, phường Bưởi, quận Tây Hồ</p>
                            <p>034.569.1910<img src="{{ asset('/frontend/images/home/icon-mobile.png') }}" alt=""
                                                class="ml-2"></p>
                            <p>lienhe.vufood@gmail.com<img src="{{ asset('/frontend/images/home/icon-mail.png') }}"
                                                           alt="" class="ml-2"></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6 customer-4i pr-10 text-left">
                        <div class="customer-content-4i">
                            <h3>KHÁCH HÀNG</h3>
                            <h6><span>Chúng tôi luôn quan tâm</span></h6>
                            <p class="mt-4">Bạn quan tâm và muốn biết thêm thông tin về VuFood? Bạn cần hỗ trợ hoặc phản
                                hồi về dịch vụ của VuFood?</p>
                            <p class="mt-4">Hồ Chí Minh: 319 Bạch Đằng, Phường 15 quận Bình Thạnh</p>
                            <p><img src="{{ asset('/frontend/images/home/icon-mobile-w.png') }}" alt="" class="mr-2">1800.2087
                            </p>
                            <p><img src="{{ asset('/frontend/images/home/icon-mail-w.png') }}" alt="" class="mr-2">info@vufood.com.vn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 slider-intro">
                <div class="owl-carousel owl-theme list-item">
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/dai-hoc-nong-nghiep.jpg') }}" alt="Giới thiệu"
                             class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/dai-hoc-nong-nghiep2.jpg') }}" alt="Giới thiệu"
                             class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/dai-hoc-nong-nghiep3.jpg') }}" alt="Giới thiệu"
                             class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/khach-hang-tai-diem-vu-food.jpg') }}" alt="Giới thiệu"
                             class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/may-ban-hang-tu-dong.jpg') }}" alt="Giới thiệu"
                             class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/nguoi-dung-xep-hang.jpg') }}" alt="Giới thiệu"
                             class="item-img">
                        <div class="overlay-item"></div>
                    </div>
                    <div class="s-item">
                        <img src="{{ asset('/frontend/images/home/trai-nghiem-san-pham.jpg') }}" alt="Giới thiệu"
                             class="item-img">
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
                            Tìm kiếm điểm đặt gần nhất của máy pha chế bán hàng tự động VuFood dễ dàng. Hệ thống điểm
                            đặt phủ khắp toàn quốc
                        </p>
                        <div class="text-ci-bottom">
                            <p>Số lượng máy: 2500 máy</p>
                            <p>Số tỉnh thành có VUFOOD: 45</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 map-ci">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5313396360307!2d105.80776221535478!3d21.051430292378896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab194bc66a69%3A0x857bb6b048b9def1!2zNjQgVsO1bmcgVGjhu4ssIELGsOG7n2ksIFTDonkgSOG7kywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1562199630819!5m2!1svi!2s"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 form-register">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 fr-img text-right pr-5">
                        <img src="{{ asset('/frontend/images/contact/may-pha-che-1.png') }}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 fr-register">
                        <form action="{{ route('contact.store') }}" method="post" role="form"
                              class="col-xl-9 col-lg-9 col-12 form-re">
                            <h3 class="pb-3 border-bottom mb-3 mt-5">ĐĂNG KÝ TƯ VẤN</h3>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control" name="full_name" id="" placeholder="Họ và tên "
                                       required value="{{ old('full_name') }}">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="" placeholder="Email "
                                       required value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone" id="" placeholder="Số điện thoại"
                                       required value="{{ old('phone') }}">
                                <span style="color: red">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="Hà Nội" id="location_hn" required>
                                        <label for="location_hn"> Hà Nội</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="TP Hồ Chí Minh" id="location_hcm"
                                               required> <label for="location_hcm"> TP Hồ Chí Minh</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="Đà Nẵng" id="location_dn" required>
                                        <label for="location_dn"> Đà Nẵng</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-6">
                                    <div class="form-group  btn-check">
                                        <input type="radio" name="address" value="Tỉnh thành khác" id="location_khac"
                                               required> <label for="location_khac"> Tỉnh thành khác</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-xl-12 col-lg-12 col-12">ĐĂNG KÝ NHẬN TƯ
                                VẤN
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.includes.footer')

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
                stagePadding: 100,
                loop: true,
                items: 5,
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
                        items: 5,
                        dots: false
                    }
                }
            });
            $('.slider-intro').on('click', '.overlay-item', function () {
                var _img = $(this).prev();
                var src = _img.attr('src');
                var alt = _img.attr('alt');
                $('#md-img').css('display', 'block');
                $('#img01').attr('src', src);
                $('#caption-img').html(alt);
            });
            $('.close-img').click(function () {
                $('#md-img').css('display', 'none');
            });
        });
    </script>
@endsection