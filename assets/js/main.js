jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 135) {
      jQuery('.header').addClass('header--fixed');
  } else {
      jQuery('.header').removeClass('header--fixed');
  }
});

mediumZoom('main img:not(.avatar)', {
  margin: 30,
  background: '#fff',
  scrollOffset: 40
})


jQuery(document).ready(function($) {

  $('.input-toggle__field').click(function() {
    if ($(this).is(':checked')) {
        $('#mc-embedded-subscribe').removeAttr('disabled');
    } else {
        $('#mc-embedded-subscribe').attr('disabled', 'disabled');
    }
  });

  $('.trigger-search').click(function() {
    var form = $(this).parents('.form--search');
    var input = $(this).parents('.input__field');
    form.submit();
  });
});