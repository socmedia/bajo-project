$(function () {

    // FIXED NAVBAR
    $(window).scroll(function () {
        const h = window.pageYOffset;
        const n = $('.navbar');
        (h > 30) ? n.addClass('scrolled'): n.removeClass('scrolled');
    })

    // MENU
    $('.nav-link').on('click', function () {
        $(".navbar-collapse").collapse('hide');
    });


    // AOS ANIMATION
    AOS.init({
        disable: 'mobile',
        duration: 800,
        anchorPlacement: 'center-bottom'
    });


    // SMOOTH SCROLL
    $(function () {
        $('.nav-link').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1000);
            event.preventDefault();
        });
    });

    // BANNER
    $('.banner').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        dots: true
    })

    // PROJECT SLIDE
    $('#project-slide').owlCarousel({
        loop: true,
        center: true,
        autoplayHoverPause: false,
        autoplay: true,
        margin: 30,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            }
        }
    });

    //  IG FEED
    $.instagramFeed({
        'username': 'bajo.untuksolo',
        'display_profile': true,
        'display_biography': true,
        'display_gallery': true,
        'items': 6,
        'items_per_row': 3,
        'lazy_load': true,
        'on_error': console.error,
        'callback': function (data) {
            const username = data.username,
                following = data.edge_follow.count,
                followers = data.edge_followed_by.count,
                biography = data.biography,
                ava = data.profile_pic_url_hd,
                posts = data.edge_owner_to_timeline_media.count,
                media = data.edge_owner_to_timeline_media.edges,
                ctn = function (targetURL, imgURL) {
                    return `<div class="col-4 p-1"><a href="${targetURL}" target="_blank"><img width="100%" src="${imgURL}" alt="instagram_post"/></a></div>`;
                }
            $('.ig__ava').html(`<img src="${ava}" alt="profile_pic" />`);
            $('.ig__username').html(`<a href="https://www.instagram.com/${username}" target="_blank">${username}</a>`);
            $('.ig__posts').html(`<h4>${posts}</h4> <small>Post</small>`);
            $('.ig__followers').html(`<h4>${followers}</h4> <small>Pengikut</small>`);
            $('.ig__following').html(`<h4>${following}</h4> <small>Mengikuti</small>`);
            $('.ig__bio').html(biography);
            media.map(function (v, i) {
                const source = `https://www.instagram.com/p/${v.node.shortcode}`;
                const img = v.node.display_url;
                (i <= 5) ? $('.ig__body').append(ctn(source, img)): false;
            })
        },
    });

    //  YT FEED
    $.ajax({
        url: `/app-resources/yt-ch`,
        method: "GET",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data)
            $('.yt__ava').html(`<img src="${data.thumbnails.url}" alt="youtube_ava" />`);
            $('.yt__username').html(data.channelName);
            $('.yt__subs').html(`${data.subscribers} Subscribers`);
            $('.yt__videos').html();
        }
    })

    //  YT FEED
    $.ajax({
        url: `/app-resources/yt-sc`,
        method: "GET",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            const ctn = function (url) {
                return `<div class="col-12 col-md-6"><iframe width="100%" src="https://www.youtube.com/embed/${url}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`
            }
            data.map(function (v, i) {
                if (v.id.kind === 'youtube#video') {
                    return $('.yt__body').append(ctn(v.id.videoId))
                }
            })
        },
        error: function (err) {
            $('#yt-feed').hide()
        }
    })

});
