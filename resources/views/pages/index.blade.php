@extends('layouts/landing')

@section('content')
<x-header />
<x-about />
<x-project :projects="$programs" />

<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="icofont icofont-close-line"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="spinner-border text-danger spinner" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <ul></ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function () {
        "use strict"

        const host = document.location.host;

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

        $('[show-program]').click(function () {
            $('.modal').modal('show');
            const index = $(this).data('index');
            $.ajax({
                url : `/api/data/${index}/get`,
                method: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    const arr = [];

                    data.step.map(function(a) {
                        return arr.push(`<li><i class="icofont icofont-stylish-right mr-2"></i>${a}</li>`)
                    })

                    $('.modal').find('.spinner').hide();
                    $('.modal').find('.modal-title').html(data.program);
                    $('.modal').find('.modal-body').removeClass('text-center')
                    $('.modal').find('ul').html(arr)
                }
            })
        })
    });
</script>
@endpush
