@php
 use Illuminate\Support\Facades\URL;
@endphp
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="robots" content="index, follow"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('images/favicon.ico') }}"/>
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/font.awesome.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/pe-icon-7-stroke.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/venobox.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/style.min.css"> -->
</head>
