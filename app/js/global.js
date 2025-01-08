import '/app/js/jquery-3.7.1.min.js';
import '/app/js/bootstrap.bundle.min.js';

$('#global-navbar-toggler').on('click', function() {
    if ($('.global-navigation-top').hasClass('d-block')) {
        $('.global-navigation-top').removeClass('d-block');
        $('.global-navigation-top').addClass('d-none');
    } else {
        $('.global-navigation-top').removeClass('d-none');
        $('.global-navigation-top').addClass('d-block');
    }
});

$(document).on('click', function(event) {
    if (!$(event.target).closest('#global-navbar-toggler').length && !$(event.target).closest('#global-navigation-top').length) {
        // Close the menu if clicking outside the button or the navigation
        if ($('.global-navigation-top').hasClass('d-block')) {
            $('.global-navigation-top').removeClass('d-block');
            $('.global-navigation-top').addClass('d-none');
        }
    }
});

$('.login-slider').on('click', function() {
    if ($('.login-slider').hasClass('bg-two')) {
            $('.login-slider').removeClass('bg-two');
            $('.login-slider').removeClass('text-blue-DBE9F4');
            $('.login-slider').removeClass('cursor-pointer');
            $('.login-slider').addClass('cursor-default');
            $('.login-slider').addClass('text-blue-303D57');
            $('.register-slider').addClass('bg-two');
            $('.register-slider').addClass('text-blue-DBE9F4');
            $('.register-slider').removeClass('text-blue-303D57');
            $('.register-slider').removeClass('cursor-default');
            $('.register-slider').addClass('cursor-pointer');
        $('.sign-form ').css({
            'transform': 'translateX(0)'
        })
    } 
});

$('.register-slider').on('click', function() {
    if ($('.register-slider').hasClass('bg-two')) {
            $('.register-slider').removeClass('bg-two');
            $('.register-slider').removeClass('text-blue-DBE9F4');
            $('.register-slider').removeClass('cursor-pointer');
            $('.register-slider').addClass('text-blue-303D57');
            $('.register-slider').addClass('cursor-default');
            $('.login-slider').addClass('bg-two');
            $('.login-slider').addClass('text-blue-DBE9F4');
            $('.login-slider').removeClass('cursor-default');
            $('.login-slider').removeClass('text-blue-303D57');
            $('.login-slider').addClass('cursor-pointer');
        $('.sign-form ').css({
            'transform': 'translateX(-100%)'
        })
    }
});