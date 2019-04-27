<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/frontend/images/icon.png') }}" rel="shortcut icon" type="image/png"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="fb:app_id" content="" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <title>
        @hasSection('title')
            @yield('title') | Văn Phong Camera
        @else
            Trang chủ | Văn Phong Camera
        @endif
    </title>
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @yield('before_styles')
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=vietnamese" rel="stylesheet">--}}
    <link href="{{ asset('/frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/vendor/backpack/bootstrap-iconpicker/icon-fonts/font-awesome-4.0.0/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/frontend/css/main.css') }}" rel="stylesheet" type="text/css"/>
    @yield('after_styles')
</head>
<body>
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