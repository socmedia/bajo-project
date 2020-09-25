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
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Solo Masa Depan bersama Bagyo Wahyono dan FX Suparjo">
    <meta property="og:image" content="{{asset('images/icon.png')}}">
    <meta property="twitter:title" content="BAJO Untuk Solo" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:description" content="Solo Masa Depan bersama Bagyo Wahyono dan FX Suparjo">
    <meta property="twitter:image" content="{{asset('images/icon.png')}}">

    <link rel="shortcut icon" href="{{asset('images/icon.png')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <x-navbar />

    @yield('content')

    <x-footer />

    <a href="https://api.whatsapp.com/send?phone=+6281248510933&text=Halo%20team%20BAJO,%20ada%20yang%20ingin%20kami%20sampaikan%20dengan%20anda%20:)"
        target="_blank" class="float-button">
        <i class="fa fa-whatsapp"></i>
        Whatsapp
    </a>

    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/smoothscroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.instagramFeed.min.js')}}"></script>
    <script async src="{{route('api.track')}}"></script>
    <script src="{{asset('js/platform.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-178737039-1');
    </script>
    @stack('scripts')
</body>

</html>
