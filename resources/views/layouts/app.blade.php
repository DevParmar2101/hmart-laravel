<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.header')
    <body class="font-sans antialiased">
    <div class="main-wrapper">
        @include('partials.system-header')
        @yield('content')
        @include('partials.system-footer')
        </div>
    </body>
</html>
