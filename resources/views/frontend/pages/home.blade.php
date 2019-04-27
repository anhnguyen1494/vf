@extends('frontend.layout')

@section('meta')
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:description" content="">
@endsection

@section('after_styles')
    {{--<link href="{{ asset('/frontend/css/home.css').'?'.time() }}" rel="stylesheet" type="text/css"/>--}}
@endsection

@section('main')
    <div class="clear"></div>
    <div class="container">
        <h1 class="text-center">Holla</h1>
    </div>

@endsection