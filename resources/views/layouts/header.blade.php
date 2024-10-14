@php
    use Illuminate\Support\Facades\URL;
@endphp
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME').'|' }}</title>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"/>
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/font.awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/venobox.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    @yield('css')
</head>
