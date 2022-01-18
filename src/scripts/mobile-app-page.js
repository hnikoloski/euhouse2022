jQuery(document).ready(function ($) {
    if ($('.mobile-app').length) {
        let topPadding = $('.mobile-app .content-wrapper header').outerHeight();
        $('.mobile-app .content-wrapper').css({
            'padding-top': topPadding,
        });
    }
})