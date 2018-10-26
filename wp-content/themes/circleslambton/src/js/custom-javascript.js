(function($) {
    $(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('.topnav').addClass('shrink');
  } else {
    $('.topnav').removeClass('shrink');
  }
});
})(jQuery);