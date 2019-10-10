<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/frontend/images/favicon.png') }}" rel="shortcut icon" type="image/png"/>
    <meta property="fb:app_id" content="" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <title>
        @hasSection('title')
            VuFood - @yield('title')
        @else
            VuFood - Trang chủ
        @endif
    </title>
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @yield('before_styles')
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,500,600,800,900&amp;subset=vietnamese" rel="stylesheet">
    <link href="{{ asset('/frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/vendor/backpack/bootstrap-iconpicker/icon-fonts/font-awesome-4.0.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/frontend/css/main.css').'?t='.time() }}" rel="stylesheet" type="text/css"/>
    @yield('after_styles')

    <!-- Facebook Pixel Code -->

    <script>

        !function(f,b,e,v,n,t,s)

        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};

            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

            n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t,s)}(window, document,'script',

            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1267501750070744');

        fbq('track', 'PageView');

    </script>

    <noscript><img height="1" width="1" style="display:none"

                   src="https://www.facebook.com/tr?id=1267501750070744&ev=PageView&noscript=1"

        /></noscript>

    <!-- End Facebook Pixel Code -->
    <!-- Google Tag Manager -->

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

        })(window,document,'script','dataLayer','GTM-WZ44WP5');</script>

    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149601873-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149601873-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 705046198 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-705046198"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-705046198');
    </script>
    <!-- Yandex.Metrika counter -->

    <script type="text/javascript" >

        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};

            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})

        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");



        ym(53470078, "init", {

            clickmap:true,

            trackLinks:true,

            accurateTrackBounce:true,

            webvisor:true

        });

    </script>

    <noscript><div><img src="https://mc.yandex.ru/watch/53470078" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

    <!-- /Yandex.Metrika counter -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZ44WP5"

                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    {{--@include('frontend.includes.menu')--}}
    @yield('main')
    {{--@include('frontend.includes.footer')--}}
</div>

@yield('before_scripts')
<script src="{{ asset('/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/frontend/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('/frontend/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('/frontend/js/notify.js') }}"></script>
<script src="{{ asset('/frontend/js/main.js') }}"></script>

@yield('after_scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@if(session('error'))
    <script>
        $(document).ready(function () {
            $.notify("{{ session('error') }}", "error");
        });
    </script>
@endif
@if(session('message'))
    <script>
        $(document).ready(function () {
            $.notify("{{ session('message') }}", "info");
        });
    </script>
@endif
@if(session('success'))
    <script>
        $(document).ready(function () {
            $.notify("{{ session('success') }}", "success");
        });
    </script>
@endif
</body>
</html>