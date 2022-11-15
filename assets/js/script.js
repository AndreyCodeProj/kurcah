$(document).ready(function(){
    $('.slider').slick({
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 5000,
        pauseOnFocus: false,
        pauseOnHover: true,
        pauseOnDotsHover: false,
        draggable: false,
        swipe: true,
        centerMode: false,
        variableWidth: false,
        waitAnimate: false,
    });
});

$(document).ready(function(){
    $('.slider-multitask').slick({
        arrows: true,
        dots: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 1000,
        autoplay: false,
        autoplaySpeed: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        draggable: false,
        swipe: true,
        centerMode: false,
        variableWidth: true,
        waitAnimate: false,
    });
});