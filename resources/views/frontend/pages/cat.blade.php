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
    <link href="{{ asset('/frontend/css/cat.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('main')
    @include('frontend.includes.menu')
    <div class="container-fluid">
        <div class="row">
            <div class="owl-carousel owl-theme slider-top">
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
    @include('frontend.includes.footer')
@endsection

@section('after_scripts')
    <script src="{{ asset('/frontend/owl/js/owl.carousel.min.js') }}"></script>
    <script>
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
                        items: 1
                    },
                    500: {
                        items: 1
                    },
                    992: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            });
        });
    </script>
@endsection