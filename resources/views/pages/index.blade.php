@extends('layouts/landing')

@section('content')
<x-header />
<x-about />
<x-project />
@endsection

@push('scripts')
<script>
    $(function () {
        "use strict"

        $(window).scroll(function () {
            const h = window.pageYOffset;
            const n = $('.navbar');
            (h > 30) ? n.addClass('scrolled') : n.removeClass('scrolled');
        })

        $('.banner').owlCarousel({
            loop:true,
            nav:true,
            items: 1,
            dots: true
        })
    });
</script>
@endpush
