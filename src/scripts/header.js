jQuery(document).ready(function ($) {
    $("#page").css("padding-top", $("#masthead").outerHeight());
    $(window).scroll(function () {
        var sticky = $("#masthead .top-bar"),
            scroll = $(window).scrollTop();

        if (scroll >= 100) {
            sticky.slideUp();
            if ($(window).width() > 768) {
                $("#to-top").slideDown();
                $('.subscribe-wrapper').slideDown();
            }
            $("#masthead").addClass("sticky");
        } else {
            sticky.slideDown();
            if ($(window).width() > 768) {
                $("#to-top").slideUp();
                $('.subscribe-wrapper').slideUp();
            }
            $("#masthead").removeClass("sticky");
        }
    });
    if ($(window).width() < 500) {
        $('#masthead').append('<div id="mob-menu-trigger"><span></span><span></span><span></span></div>');
        $('#primary-menu li.menu-item-has-children').append('<span class="sub-menu-trigger"><i class="fas fa-chevron-down"></i></span>');
        $('#mob-menu-trigger').on('click', function () {
            $(this).toggleClass('active');
            $('#primary-menu').toggleClass('active');
            $('body').toggleClass('menu-opened');
        })
        $('.sub-menu-trigger').on('click', function () {
            $(this).toggleClass('active');
            $(this).siblings('.sub-menu').slideToggle()
        })
    }

    $("#masthead form .search-btn").on("click", function (e) {
        if ($(this).hasClass("disabled")) {
            e.preventDefault();
            $("#masthead form").toggleClass("active");
            $("#masthead").toggleClass("search-open");
            $(this).removeClass("disabled");
        }
    });
    $("#masthead form .search-close").on("click", function (e) {
        e.preventDefault();
        $("#masthead form").toggleClass("active");
        $("#masthead").toggleClass("search-open");
        $("#masthead form .search-btn").addClass("disabled");
    });
});
