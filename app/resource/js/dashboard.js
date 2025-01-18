import '/app/resource/js/jquery-3.7.1.min.js';
import '/app/resource/js/bootstrap.bundle.min.js';


$('.navbar-bottom-pelanggan .navbar-bottom-url.active').removeClass("opacity-50");
$('.navbar-bottom-pelanggan .navbar-bottom-url.active .icons').addClass("bg-one-invert invert-1");

$('#pelanggan-navbar-toggler').on('click', function() {
    if ($('.pelanggan-navigation-top').hasClass('d-block')) {
        $('.pelanggan-navigation-top').removeClass('d-block');
        $('.pelanggan-navigation-top').addClass('d-none');
    } else {
        $('.pelanggan-navigation-top').removeClass('d-none');
        $('.pelanggan-navigation-top').addClass('d-block');
    }
});

$(document).on('click', function(event) {
    if (!$(event.target).closest('#pelanggan-navbar-toggler').length && !$(event.target).closest('#pelanggan-navigation-top').length) {
        // Close the menu if clicking outside the button or the navigation
        if ($('.pelanggan-navigation-top').hasClass('d-block')) {
            $('.pelanggan-navigation-top').removeClass('d-block');
            $('.pelanggan-navigation-top').addClass('d-none');
        }
    }
});

$('.navbar-bottom-pengelola .navbar-bottom-url.active').removeClass("opacity-50");
$('.navbar-bottom-pengelola .navbar-bottom-url.active .icons').addClass("bg-one-invert invert-1");

$('#pengelola-navbar-toggler').on('click', function() {
    if ($('.pengelola-navigation-top').hasClass('d-block')) {
        $('.pengelola-navigation-top').removeClass('d-block');
        $('.pengelola-navigation-top').addClass('d-none');
    } else {
        $('.pengelola-navigation-top').removeClass('d-none');
        $('.pengelola-navigation-top').addClass('d-block');
    }
});

$(document).on('click', function(event) {
    if (!$(event.target).closest('#pengelola-navbar-toggler').length && !$(event.target).closest('#pengelola-navigation-top').length) {
        // Close the menu if clicking outside the button or the navigation
        if ($('.pengelola-navigation-top').hasClass('d-block')) {
            $('.pengelola-navigation-top').removeClass('d-block');
            $('.pengelola-navigation-top').addClass('d-none');
        }
    }
});

$('.search-filter .col-4.active a.card').removeClass("text-dark bg-one");
$('.search-filter .col-4.active a.card').addClass("text-white bg-two");