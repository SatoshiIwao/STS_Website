(function($) {
    "use strict";

    /* Scroll on the page sections */
    $('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 40
                }, 900);
                return false;
            }
        }
    });

    /* White Background on Scroll */
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 650;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({
        target: '.navbar-default',
        offset: 80
    })

    /* MagnificPopup Lightbox */
    $('.popup-link').magnificPopup({
        //delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true,
            removalDelay: 500,
            mainClass: 'mfp-with-zoom'
        }
    });

    /* MagnificPopup Inline Lightbox */
    $('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true,
        removalDelay: 500,
        mainClass: 'mfp-fade'
    });

   /* MagnificPopup Ajax Load */
   $('.ajax-popup').magnificPopup({
	type: 'ajax',
	alignTop: true,
	overflowY: 'scroll'
   });

    /* Isotope Filter */
    $(window).load(function(){
    var $container2 = $('#blog-masonry');
      $container2.isotope({
          itemSelector: '.post-box'
      });
    });
    $(window).load(function() {
        var $container = $('#lightbox');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });

})(jQuery);