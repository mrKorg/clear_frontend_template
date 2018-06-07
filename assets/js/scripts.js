jQuery(window).load(function () {

    // Loader
    jQuery('#page-preloader').fadeOut('slow');
    jQuery('#page-preloader .spinner').fadeOut('slow');

});

jQuery(document).ready(function($) {
    
    "use strict";

    // Slider
    $('.js-w-slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        fade: true,
        speed: 50,
        autoplay: true,
        autoplaySpeed: 7000
    });
    $(".js-w-slider").on("init", function (event, slick, direction) {
        var currentSlide = slick.slick("slickCurrentSlide");
    }).on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        slick.$slides.eq(currentSlide).find(".w-slider__item").addClass("disable");
        slick.$slides.eq(currentSlide).find(".w-slider__item").removeClass("active");
        slick.$slides.eq(nextSlide).find(".w-slider__item").removeClass("active");
    }).on("afterChange", function (event, slick, currentSlide) {
        slick.$slides.eq(currentSlide).find(".w-slider__item").removeClass("disable");
        slick.$slides.eq(currentSlide).find(".w-slider__item").addClass("active");
    });

    // Modal video
    $('.js-m-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?rel=0&autoplay=1'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Modal
    $('.open-popup-link').magnificPopup({
        type:'inline',
        midClick: true 
    });

    // Gallery
    $('.js-m-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });

    //open the lateral panel
    $('.js-m-menu-btn').on('click', function (event) {
        event.preventDefault();
        $('.cd-panel--menu').addClass('is-visible');
    });
    //clode the lateral panel
    $('.cd-panel').on('click', function (event) {
        if ($(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close')) {
            $('.cd-panel').removeClass('is-visible');
            event.preventDefault();
        }
    });
    $('.scroll-link').on('click', function () {
        $('.cd-panel').removeClass('is-visible');
    });

    // AOS
    AOS.init();

    // Sticky
    var header = $('.m-header');
    var navTop;
    function getNavTop() {
        navTop = header.offset().top;
    }
    window.addEventListener("orientationchange", function() {
        getNavTop()
    }, false);
    getNavTop()
    $(window).scroll(function(){
        if( $(window).scrollTop() > navTop ) {
            header.addClass('fixed');
        } else {
            header.removeClass('fixed'); 
        }
    });
    
    // Nav
    $(".scroll-link").click(function () {
        var scroll = $(this).attr('href');
        if ($(scroll).length != 0) {
            $('html, body').animate({scrollTop: ($(scroll).offset().top - header.height())}, 500);
        }
        return false;
    });
    $(window).scroll(function() {
        $(".scrollBlock").each(function () {
            var $el = $(this),
                id = "#" +$el.attr("id"),
                elTopPosRelToWindow = $el.offset().top - $(window).scrollTop(),
                elBottomPosRelToWindow = $el.offset().top - $(window).scrollTop() + $el.height(),
                inView = ((elTopPosRelToWindow < $(window).height()*0.4) && (elBottomPosRelToWindow > $(window).height()*0.2));
            $el.toggleClass("active", inView);
            $(".m-menu a[href='" + id +"']").toggleClass("active", inView);
        });
    });
    
    
    
});