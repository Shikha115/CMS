$(document).ready(function() {

    $(() => {
        $(document).scroll(() => {
            var scroll = $(this).scrollTop();
            $('.custom').toggleClass('onscroll', scroll > 100);
        });
    });

    $(() => {
        $('.menu .nav-item').click(e => {
            $(e.currentTarget).toggleClass('menu-active');
        });
    });

    $(function() {
        $('.slide-one-item').owlCarousel({
            center: false,
            autoplayHoverPause: true,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 0,
            smartSpeed: 1500,
            autoplay: true,
            pauseOnHover: false,
            dots: false,
            nav: false,
            animateOut: 'fadeOut',
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
        });
    });

    $(function() {
        $('.team-slider').owlCarousel({
            autoplayHoverPause: true,
            items: 4,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1500,
            autoplay: true,
            pauseOnHover: false,
            dots: false,
            nav: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>']
        });
    });
});