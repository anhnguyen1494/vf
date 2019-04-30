@extends('frontend.layout')
@section('title', 'Tin tức')
@section('meta')
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="">
@endsection

@section('after_styles')
    <link rel="stylesheet" href="{{ asset('/frontend/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/owl/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('/frontend/css/category.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    @include('frontend.includes.menu')
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme slider-top mb-5">
                <div class="s-item">
                    <img src="{{ asset('frontend/images/category/slider-top.jpg') }}" alt="" class="d-block w-100">
                    <div class="s-text">
                        <h3><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</a></h3>
                        <p class="s-date">28/04/2019</p>
                    </div>
                </div>
                <div class="s-item">
                    <img src="{{ asset('frontend/images/category/slider-top.jpg') }}" alt="" class="d-block w-100">
                    <div class="s-text">
                        <h3><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</a></h3>
                        <p class="s-date">28/04/2019</p>
                    </div>
                </div>
                <div class="s-item">
                    <img src="{{ asset('frontend/images/category/slider-top.jpg') }}" alt="" class="d-block w-100">
                    <div class="s-text">
                        <h3><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</a></h3>
                        <p class="s-date">28/04/2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 news mb-5">
                <div class="row">
                    <h3 class="mb-5">TIN TỨC GẦN NHẤT</h3>
                    @for($i=1;$i<5;$i++)
                        <div class="col-xl-12 col-lg-12 col-md-12 blog-item">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 img-blog">
                                    <a href="#">
                                        <img src="{{ asset('frontend/images/category/blog-img.jpg') }}" alt="" class="d-block w-100">
                                    </a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 text-blog">
                                    <h4 class="title-blog">
                                        <a href="#">Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="desc-blog">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                    </p>
                                    <p class="date-blog d-flex justify-content-between">
                                        <span>27/04/2019</span>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=#"
                                           onclick="OpenWindow(this.href);return false;"><img src="{{ asset('frontend/images/category/share-fb.png') }}" alt=""></a>
                                    </p>
                                </div>
                                <div class="bd-bot"></div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 events">
                <div class="row">
                    <h3 class="mb-5">SỰ KIỆN</h3>
                    @for($i=1;$i<5;$i++)
                        <div class="col-xl-12 col-lg-12 col-md-12 event-item mb-3">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-1 col-2 img-event d-flex justify-content-center align-items-center">
                                    <a href="#" class="d-block w-100">
                                        <img src="{{ asset('frontend/images/category/hot.png') }}" alt="" class="d-block w-100">
                                    </a>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-11 col-10 text-event">
                                    <h4 class="title-event">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    </h4>
                                    <p class="date-event">
                                        <span>27/04/2019</span>
                                    </p>
                                </div>
                                <div class="bd-bot"></div>
                            </div>
                        </div>
                    @endfor
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
            var screenLeft=0, screenTop=0;
            if(!name) name = 'MyWindow';
            if(!width) width = 600;
            if(!height) height = 250;
            var defaultParams = { };
            if(typeof window.screenLeft !== 'undefined') {
                screenLeft = window.screenLeft;
                screenTop = window.screenTop;
            } else if(typeof window.screenX !== 'undefined') {
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
            for(var k in features_dict) {
                features_arr.push(k+'='+features_dict[k]);
            }
            features_str = features_arr.join(',');
            window.open(href, name, features_str);
        }
        $(document).ready(function () {
            var owl = $('.slider-top');
            owl.owlCarousel({
                stagePadding: 350,
                loop: true,
                items: 1,
                margin: 10,
                nav: true,
                navText: ["<img src='{{ asset('/frontend/images/category/back.png') }}' alt='Prev'>","<img src='{{ asset('/frontend/images/category/next.png') }}' alt='Prev'>"],
                dots: true,
                responsive: {
                    0: {
                        stagePadding: 20,
                        items: 1
                    },
                    500: {
                        stagePadding: 100,
                        items: 1
                    },
                    992: {
                        stagePadding: 200,
                        items: 1
                    },
                    1200: {
                        stagePadding: 250,
                        items: 1
                    }
                }
            });
        });
    </script>
@endsection