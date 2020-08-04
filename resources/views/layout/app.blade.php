<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="{{ app()->getLocale() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.header')
</head>
<body>
    <div id="app">
    @include('partials.nav')
    @yield('maincontent')
    @include('partials.modal')
    </div>
    
@include('partials.footer')
</body>
</html>