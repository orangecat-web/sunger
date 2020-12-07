var owl = $('.owl-carousel');
owl.owlCarousel({
    nav: true,
    dots: false,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    loop: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2,
            nav: false,
        },
        567: {
            items: 2,
            nav: false,
        },
        768: {
            items: 3,
            nav: false,
        },
        992: {
            items: 4,
            nav: true,
        },
        1200: {
            items: 4,
            nav: true,
        }
    }
})