$('.slider').slick({
    slidesToShow: 8,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: '.prev_btn',
    nextArrow:'.next_btn',
    responsive: [
    {
        breakpoint: 1024,
        settings: {
        slidesToShow: 5,
        slidesToScroll: 3,
        infinite: true,
        dots: true
        }
    },
    {
        breakpoint: 600,
        settings: {
        slidesToShow: 4,
        slidesToScroll: 2
        }
    },
    {
        breakpoint: 480,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 1
        }
    }
]});