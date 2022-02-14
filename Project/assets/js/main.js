$(function() {
    
    "use strict";
    


    // preloader
    $(window).on('load', function(event) {
        $('.gridtemplate-loader').delay(500).fadeOut(500);
        
    });



    jQuery(document).ready(function($) {
        $('a[data-rel^=lightcase]').lightcase();
    });




     //===== Sticky

    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".header_navbar").removeClass("sticky");
        } else {
            $(".header_navbar").addClass("sticky");
        }
    });
    
    
    //===== Section Menu Active

    var scrollLink = $('.page-scroll');
    // Active link switching
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 73;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    });


    //===== close navbar-collapse when a  clicked

    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });

    $(".navbar-toggler").on('click', function () {
        $(this).toggleClass("active");
    });

    $(".navbar-nav a").on('click', function () {
        $(".navbar-toggler").removeClass('active');
    });
    
    


 


    
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    
    
    
    
    
    //===== slick Client
    
    $('.doctors_carousel').slick({
         autoplay: true,
        centerPadding: '20',
        dots: false,
        arrows: true,
        infinite: true,
        speed: 800,
        slidesToShow: 4,

      prevArrow: '<div class="slick-prev"><i class="icofont-rounded-right"></i></div>',
      nextArrow: '<div class="slick-next"><i class="icofont-rounded-left"></i></div>',
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                centerMode: false,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
              }
            }
        ]
    });
    

    


  // Wow
    new WOW().init();

   // counterUp
      $('.counter').counterUp({
          delay: 100,
          time: 9000
      });

    




    //===== Slick Slider

    function mainSlider() {
        var BasicSlider = $('.home-slider');
        BasicSlider.on('init', function (e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });

        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });


        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 7000,
            dots: false,
            fade: true,
            arrows: true,
            prevArrow: '<span class="prev"><i class="icofont-rounded-right"></i></span>',
            nextArrow: '<span class="next"><i class="icofont-rounded-left"></i></span>',
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        dots: false,
                        arrows: false
                    }
                }
            ]
        });


        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();









    
});


