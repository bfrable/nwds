/*globals jQuery:false */

(function ($) {

    'use strict';

    var helpers = {
        showHeaderLogo: function() {
            var heroHeight   = $('.hero').innerHeight();
            var logo         = $('header .logo');
            var showLogo;

            console.log(heroHeight)

            $(window).on('scroll', function() {
                if($(this).scrollTop() >= heroHeight - 200) {
                    showLogo = true;
                } else if ($(this).scrollTop() <= heroHeight - 200) {
                    showLogo = false;
                }

                if (showLogo) {
                    logo.fadeIn();
                } else {
                    logo.fadeOut();
                }
            });
        },

        smoothScroll: function () {

            var headerHeight = $('header').innerHeight();

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
            this.showHeaderLogo();
        }
    };

    helpers.init();

}(jQuery));
