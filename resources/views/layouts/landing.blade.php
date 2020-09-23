<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>BAJO Untuk Solo </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Pasangan Calon Bagyo Wahyono dan FX Suparjo">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <x-navbar />

    @yield('content')

    <x-footer />

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @stack('scripts')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="{{route('api.track')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config');
    </script>
</body>

</html>
