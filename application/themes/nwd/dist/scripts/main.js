/*globals jQuery:false */

(function ($) {

    'use strict';

    var helpers = {
        smoothScroll: function () {

            var headerHeight = $('header').innerHeight();
            var heroHeight   = $('.hero').innerHeight();
            var logo         = $('header .logo');
            var showLogo;
            
            $(window).on('scroll', function() {
                if($(this).scrollTop() >= heroHeight) {
                    console.log(true);
                    showLogo = true;
                } else if ($(this).scrollTop() <= heroHeight) {
                    console.log(false);
                    showLogo = false;
                }

                if (showLogo) {
                    logo.fadeIn();
                } else {
                    logo.fadeOut();
                }
            });

            $('header a').click(function(e) {
                var id = $(this).attr('data-name');

                e.preventDefault();
                
                $('html, body').animate({
                    scrollTop: $('section[data-section="' + id + '"]').offset().top - headerHeight
                }, 500);
            });
        },

        services: {
            slider: $('.services-content > .row'),
            navItem: $('.js-services li'),

            setActive: function () {
                helpers.services.navItem.each(function(i) {
                    $('.js-services .slide-' + i).click(function(){
                        helpers.services.navItem.removeClass('active');
                        $(this).addClass('active');
                        helpers.services.slider.slick('slickGoTo', i)
                    })
                })
            },
            slick: function () {
                helpers.services.slider.slick({
                    fade: true,
                    adaptiveHeight: true,
                    swipe: false,
                    accessability: false,
                    arrows: false
                });
            },
            init: function () {
                helpers.services.setActive();
                helpers.services.slick();
            }
        },

        init: function () {
            this.smoothScroll();
            this.services.init();
        }
    };

    helpers.init();

}(jQuery));
