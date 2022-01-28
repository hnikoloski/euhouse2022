jQuery(document).ready(function ($) {
  $("a[href='nolink']").on("click", function (e) {
    e.preventDefault();
  });

  if ($(".try-to-hide").length) {
    // if($('.try-to-hide').hasClass)
    $(`.try-to-hide.${$(".checkCountry").val()}`).hide();
  }
  if ($(window).width() > 500) {
    $("#masthead #primary-menu li a").addClass(
      "fancy-hover fancy-hover-lblue"
    );
  }
  //Cookie Functions
  function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  function setCookie(key, value, expiry) {
    var expires = new Date();
    expires.setTime(expires.getTime() + expiry * 24 * 60 * 60 * 1000);
    document.cookie = key + "=" + value + ";expires=" + expires.toUTCString();
  }

  function getCookie(key) {
    var keyValue = document.cookie.match("(^|;) ?" + key + "=([^;]*)(;|$)");
    return keyValue ? keyValue[2] : null;
  }

  function eraseCookie(key) {
    var keyValue = getCookie(key);
    setCookie(key, keyValue, "-1");
  }
  // End Cookie Functions

  // Cookie notice
  if (getCookie("visitorCookie") == "cookieAccepted") {
    $("#cookie-notice").remove();
  } else {
    $("body").append(
      '<div id="cookie-notice" class="animated fadeInUp"> <p>Our Website uses cookies to improve your experience. Read more at our <a href="/privacy-policy-mobile-app">Privacy Policy</a>.</p> <div class="buttons-wrapper"> <a href="#!" class="accept">Accept</a> <a href="#!" class="decline">Decline</a></div> </div>'
    );
    $("#cookie-notice .accept").on("click", function (e) {
      e.preventDefault();
      setCookie("visitorCookie", "cookieAccepted", 3);
      $("#cookie-notice").hide();
      setTimeout(function () {
        $("#cookie-notice").remove();
      }, 3000);
    });
    $("#cookie-notice .decline").on("click", function (e) {
      e.preventDefault();
      setCookie("visitorCookie", "cookieDeclined", 3);
      $("#cookie-notice").hide();
      setTimeout(function () {
        $("#cookie-notice").remove();
      }, 3000);
    });
  }
  // Cookie notice end
  $('.current-year').text(new Date().getFullYear());


  if (window.location.hash == '#devmode') {
    $('#masthead #primary-menu li.wpml-ls-item, #masthead #primary-menu li.wpml-ls-item a .wpml-ls-native').show();
  }
  if ($('.youth-engaging-events .content').length) {
    $('.youth-engaging-events .contact-form .row .col button').on('click', function () {
      $('#timeFromRes').val($('#timeFrom').val())
      $('#timeToRes').val($('#timeTo').val())
      console.log($('#timeFromRes').val())
      console.log($('#timeToRes').val())
    })
    document.addEventListener('wpcf7invalid', function (event) {
      $('.youth-engaging-events .content').addClass('error');
      $('.youth-engaging-events .content').removeClass('success');
    }, false);

    document.addEventListener('wpcf7mailsent', function (event) {
      $('.youth-engaging-events .content').addClass('success');
      $('.youth-engaging-events .content').removeClass('error');
    }, false);
  }
});
