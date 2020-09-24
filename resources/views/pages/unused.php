<!-- <x-social :yt="$yt" />  -->

<!-- <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
</div> -->

<!-- $('[show-program]').click(function () {
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

        $.ajax({
            url : `/api/yt-ch`,
            method: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                // console.log(data);
                $('.yt-card').find('img').attr('src', data.thumbnails.url)
            }
        }) -->
