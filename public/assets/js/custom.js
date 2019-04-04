/*

Template: Showkase - Minimal Portfolio Template
Author: iqonicthemes.in
Version: 1.0
Design and Developed by: iqonicthemes.in

*/

/*================================================
[  Table of contents  ]
================================================

:: Page loader
:: Back to top
:: Header
:: tilt
:: Isotope
:: Portfolio Move
:: wow
:: counter
:: Progress Bar
:: countdown
:: owl carousel
:: Magnific Popup

======================================
[ End table content ]
======================================*/

"use strict";

/*************************
    Page loader
*************************/
function preloader() {
    $("#load").fadeOut();
    $('#loading').delay().fadeOut('slow');

}

/*************************
  Back to top
*************************/
function backtotop() {
    $('#back-to-top').fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('#back-to-top').fadeIn(1500);
        } else {
            $('#back-to-top').fadeOut(500);
        }
    });
    // scroll body to 0px on click
    $('#top').on('click', function() {
        $('top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}

/*************************
Header
*************************/
function header() {
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('menu-sticky');
        } else {
            $('header').removeClass('menu-sticky');
        }
    });
    var touch = $('#resp-menu');
    var menu = $('.menu');

    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 767 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
}

/*************************
         tilt
*************************/

function tilt() {
    $('.js-tilt').tilt({
        glare: true,
        maxGlare: .9
    })

}

/*************************
         Isotope
*************************/

function isotope() {
    var $isotope = $(".isotope"),
        $itemElement = '.grid-item',
        $filters = $('.isotope-filters'); {
        $isotope.isotope({
            resizable: true,
            itemSelector: $itemElement,
            masonry: {
                gutterWidth: 10
            }
        });
        $filters.on('click', 'button', function() {
            var $val = $(this).attr('data-filter');
            $isotope.isotope({
                filter: $val
            });
            $filters.find('.active').removeClass('active');
            $(this).addClass('active');
        });
    }
}


/*************************
Portfolio Move
*************************/

function portfolio() {
    $(' .portfolio-cr> li ').each(function() {
        $(this).hoverdir({});
    });

}

/*************************
wow
*************************/

function wow() {
    new WOW().init();

}

/*************************
       counter
*************************/

function counter() {
    $('.timer').countTo();
}

/*************************
Progress Bar
*************************/
function progress() {
    $('.iq-progress-bar > span').each(function() {
        var $this = $(this);
        var width = $(this).data('percent');
        $this.css({
            'transition': 'width 2s'
        });
        setTimeout(function() {
            $this.appear(function() {
                $this.css('width', width + '%');
            });
        }, 500);
    });
}

/*************************
       countdown
*************************/
function countdown() {
    $('#countdown').countdown({
        date: '10/01/2020 23:59:59',
        offset: -8,
        day: 'Day',
        days: 'Days'
    });
}

/*************************
       owl carousel 
*************************/
function owlcarousel() {
    $(".owl-carousel").each(function() {
        var $this = $(this),
            $items = ($this.data('items')) ? $this.data('items') : 1,
            $loop = ($this.data('loop')) ? $this.data('loop') : true,
            $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
            $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
            $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
            $space = ($this.attr('data-space')) ? $this.data('space') : 30;
        $(this).owlCarousel({
            loop: $loop,
            items: $items,
            responsive: {
                0: {
                    items: $this.data('xx-items') ? $this.data('xx-items') : 1
                },
                600: {
                    items: $this.data('xs-items') ? $this.data('xs-items') : 1
                },
                767: {
                    items: $this.data('sm-items') ? $this.data('sm-items') : 2
                },
                992: {
                    items: $this.data('md-items') ? $this.data('md-items') : 2
                },
                1190: {
                    items: $this.data('lg-items') ? $this.data('lg-items') : 3
                },
                1200: {
                    items: $items
                }
            },
            dots: $navdots,
            margin: $space,
            nav: $navarrow,
            navText: ["<i class='ion-ios-arrow-left'></i>", "<i class='ion-ios-arrow-right'></i>"],
            autoplay: $autoplay,
            autoplayHoverPause: true
        });

    });

}

/*************************
Magnific Popup
*************************/
function popupgallery() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a.popup-img',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

}


/*************************
    Image Pieces
*************************/
function ImagePieces() {
    {
            imagesLoaded(document.body, { background: true }, () => document.body.classList.remove('loading'));

            Array.from(document.querySelectorAll('.grid .pieces')).forEach((el, pos) => {
                const piecesObj = new Pieces(el, {
                    pieces: { rows: 10, columns: 8 },
                    delay: [0, 25],
                    bgimage: el.dataset.imageAlt
                });
                el.addEventListener('mouseenter', () => animateOut(piecesObj, pos));
                el.addEventListener('touchstart', () => animateOut(piecesObj, pos));
                el.addEventListener('mouseleave', () => animateIn(piecesObj, pos));
                el.addEventListener('touchend', () => animateOut(piecesObj, pos));
            });

            const animateOut = (instance, pos) => instance.animate({
                delay: (t, i, l) => {
                    return parseInt(t.dataset.column) * parseInt(t.dataset.delay);
                },
                translateX: [{
                        value: pos % 2 === 1 ? (t, i) => {
                            return anime.random(75, 150) + 'px';
                        } : (t, i) => {
                            return anime.random(-150, -75) + 'px';
                        },
                        duration: 500,
                        easing: 'easeOutQuad'
                    },
                    {
                        value: pos % 2 === 1 ? (t, i) => {
                            return anime.random(-1000, -400) + 'px';
                        } : (t, i) => {
                            return anime.random(400, 1000) + 'px';
                        },
                        duration: 400,
                        easing: 'easeOutExpo'
                    }
                ],
                translateY: [{
                        value: (t, i) => {
                            return anime.random(-125, -75) + 'px';
                        },
                        duration: 500,
                        easing: 'easeOutQuad'
                    },
                    {
                        value: (t, i) => {
                            return t.dataset.row < instance.getTotalRows() / 2 ? anime.random(100, 200) + 'px' : anime.random(-200, -100) + 'px';
                        },
                        duration: 400,
                        easing: 'easeOutExpo'
                    }
                ],
                opacity: {
                    value: 0,
                    delay: 500,
                    duration: 400,
                    easing: 'easeOutExpo'
                }
            });

            const animateIn = (instance, pos) => instance.animate({
                duration: 500,
                easing: [0.8, 1, 0.3, 1],
                delay: (t, i) => {
                    return pos % 2 === 1 ?
                        (instance.getTotalColumns() - parseInt(t.dataset.column)) * parseInt(t.dataset.delay) :
                        parseInt(t.dataset.column) * parseInt(t.dataset.delay);
                },
                translateX: '0px',
                translateY: '0px',
                opacity: {
                    value: 1,
                    duration: 500,
                    easing: 'linear'
                }
            });
        }

}

$(document).ready(function() {
    owlcarousel(),
        backtotop(),
        header(),
        tilt(),
        wow(),
        counter(),
        progress(),
        countdown(),
        popupgallery(),
        portfolio(),
        ImagePieces(),
        preloader();
});

$(window).on('load', function() {
        isotope();
});