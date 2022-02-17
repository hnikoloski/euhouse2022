
jQuery(document).ready(function ($) {
  if ($(window).width() < 501) {
    if ($('.post-type-archive-events').length) {
      $('#primary .container .row[data-link]').on('click', function () {
        location.href = $(this).data('link');
      })
    }
  }
});

