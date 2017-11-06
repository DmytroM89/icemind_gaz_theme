jQuery(document).ready(function($) {
    
    "use strict";

    // Loader
    $('#page-preloader').fadeOut('slow');
    $('#page-preloader .spinner').fadeOut('slow');

    // Slider
    $('.js_clients').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 6,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 544,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });


    // Contacts
    // Map
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: {lat: 50.422596, lng: 30.508900},
            mapTypeControl: false,
            scaleControl: true,
            streetViewControl: true,
            rotateControl: false,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            scrollwheel: false,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        });
        var marker = new google.maps.Marker({
            position: {lat: 50.422596, lng: 30.508900},
            map: map
        });
    }

    if ($('body').hasClass('page-id-29')) {
        initMap();
    }


    //open the lateral panel
    $('.header__menuBtn').on('click', function (event) {
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

    // Nav
    $(".scroll-link a").click(function () {
        var scroll = $(this).attr('href');
        if ($(scroll).length != 0) {
            $('html, body').animate({scrollTop: ($(scroll).offset().top)}, 500);
        } else {
            window.location.href = scripts_object.home + '#clients'
        }
        return false;
    });
    
    
    
});