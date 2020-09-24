<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>BAJO Untuk Solo </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Solo Masa Depan bersama Bagyo Wahyono dan FX Suparjo">
    <meta property="og:title" content="BAJO Untuk Solo" />
    <meta property="og:url" content="https://bajountuksolo.com/" />
    <meta property="og:description" content="Solo Masa Depan bersama Bagyo Wahyono dan FX Suparjo">
    <meta property="og:image" content="{{asset('images/icon.png')}}">
    <link rel="shortcut icon" href="{{asset('images/icon.png')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <x-navbar />

    @yield('content')

    <x-footer />

    <a href="tel:+6282137303983" target="_blank" class="float-button">
        <i class="fa fa-whatsapp"></i>
        Whatsapp
    </a>
    {{-- <a href="https://api.whatsapp.com/send?phone=+6282137303983&text=Halo team BAJO, ada yang ingin kami sampaikan dengan anda :)"
        target="_blank" class="float-button">
        <i class="fa fa-whatsapp"></i>
        Whatsapp
    </a> --}}

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @stack('scripts')

    <script async src="{{route('api.track')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-178737039-1');
    </script>

</body>

</html>
