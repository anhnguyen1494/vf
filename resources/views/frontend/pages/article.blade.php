@extends('frontend.layout')
@section('title')
    {{ $news->title }}
@endsection
@section('meta')
    <meta name="description" content="{{ $news->desc_short }}">
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{ $news->title }}"/>
    <meta property="og:image" content="{{ url($news->image) }}"/>
    <meta property="og:description" content="{{ $news->desc_short }}">
@endsection

@section('after_styles')
    <link href="{{ asset('/frontend/css/article.css').'?t='.time() }}" rel="stylesheet" type="text/css"/>
    <style>
        .button-fb {
            position: fixed;
            border-right: 6px solid #ff9933;
            margin-right: -5px;
            top: 250px;
        }
    </style>
@endsection

@section('main')
    @include('frontend.includes.menu')
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-xl-1 col-lg-1 col-md-2 border-right">
                <div class="row button-fb mt-5 pr-4">
                    <div class="fb-like" data-href="{{ url()->current() }}" data-width=""
                         data-layout="box_count" data-action="like" data-size="small" data-show-faces="true"
                         data-share="true"></div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-10 col-12 content-article mb-5">
                <h2 class="art-title mb-3">{{ $news->title }}</h2>
                <div class="art-content">
                    {!! $news->content !!}
                </div>
                <p class="art-date text-right border-top pt-2"
                   style="color: gray">{{ date('D, d/m/Y',strtotime($news->date)) }}</p>
                <div class="art-rela mt-5">
                    <h3 class="mb-3">Tin tức khác</h3>
                    @if(!empty($news_rela))
                        @foreach($news_rela as $news_rl)
                            @php($link = route('article',['cat_slug' => $news_rl->category->slug, 'art_slug' => $news_rl->slug]))
                            <div class="rela-item pl-3">
                                <div class="row">
                                    <div class="col-xl-9 col-lg-9 col-8">
                                        <h4><a href="{{ $link }}">{{ $news_rl->title  }}</a></h4>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-4">
                                        {{ date('D, d/m/Y',strtotime($news->date)) }}
                                    </div>
                                    <div class="bd-bot mb-2"></div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 events">
                <div class="row">
                    <h3 class="mb-5 pl-2">SỰ KIỆN</h3>
                    @if(!empty($events))
                        @foreach($events as $event)
                            @php($link = route('article',['cat_slug' => $event->category->slug, 'art_slug' => $event->slug]))
                            <div class="col-xl-12 col-lg-12 col-md-12 event-item mb-3">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-1 col-2 img-event d-flex justify-content-center align-items-center">
                                        <a href="{{ $link }}" class="d-block w-100">
                                            <img src="{{ asset('frontend/images/category/hot.png') }}" alt=""
                                                 class="d-block w-100">
                                        </a>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-11 col-10 text-event">
                                        <h4 class="title-event">
                                            <a href="{{ $link }}">{{ $event->title }}</a>
                                        </h4>
                                        <p class="date-event">
                                            <span>{{ date('d/m/Y',strtotime($event->date)) }}</span>
                                        </p>
                                    </div>
                                    <div class="bd-bot"></div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('frontend.includes.footer')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&autoLogAppEvents=1&version=v4.0&appId=2018493811596330"></script>
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