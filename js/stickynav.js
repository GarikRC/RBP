var NavTop = $('#nav').offset().top;

$(window).scroll(function(){
  if( $(window).scrollTop() > NavTop ) {
    $('#nav').css({position: 'fixed', top: '0px'});
  } else {
    $('#nav').css({position: 'static'});
  }
});
