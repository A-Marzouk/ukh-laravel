
(function($) {
    'use strict';

    // Main Navigation
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('open');
        $('.site-navigation').toggleClass('show');
    });

    // Testimonial Slider
    var swiper = new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        effect: 'fade',
        speed: 800,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

    $('.gallery-wrap').masonry({
        itemSelector: '.gallery-grid'
    });

    // Accordion & Toggle
    $('.accordion-wrap.type-accordion').collapsible({
        accordion: true,
        contentOpen: 0,
        arrowRclass: 'arrow-r',
        arrowDclass: 'arrow-d'
    });

    $('.accordion-wrap .entry-title').on('click', function() {
        $('.accordion-wrap .entry-title').removeClass('active');
        $(this).addClass('active');
    });

    // change background images
    var bgImageArray = ["images/main.jpg", "images/cover-3.jpg", "images/cover-4.jpg"],
        base = "/",
        secs = 4;
    bgImageArray.forEach(function(img){
        new Image().src = base + img;
        // caches images, avoiding white flash between background replacements
    });

    function backgroundSequence() {
        window.clearTimeout();
        var k = 0;
        for (var i = 0; i < bgImageArray.length; i++) {
            setTimeout(function(){
                if(!$('#mainSection').length > 0){
                    return;
                }
                document.getElementById('mainSection').style.background = "url(" + base + bgImageArray[k] + ") no-repeat center center fixed";
                document.getElementById('mainSection').style.backgroundSize ="cover";
                if ((k + 1) === bgImageArray.length) { setTimeout(function() { backgroundSequence() }, (secs * 1000))} else { k++; }
            }, (secs * 1000) * i)
        }
    }
    backgroundSequence();

    if($(window.location.hash).length > 0){
        $('html, body').animate({ scrollTop: $(window.location.hash).offset().top}, 1000);
    }

    $('a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate( {
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        } );
    } );

})(jQuery);
