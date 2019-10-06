jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 135) {
      jQuery(".header").addClass("header--fixed");
  } else {
      jQuery(".header").removeClass("header--fixed");
  }
});
