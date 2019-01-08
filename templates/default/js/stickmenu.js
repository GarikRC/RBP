$(window).scroll(function() {
  if ($(this).scrollTop() > 1) {
    $('header.fixed-header').addClass("sticky");
  } else {
    $('header.fixed-header').removeClass("sticky");
  }
});

$(document).ready(function() {

  if (Modernizr.csstransitions) {
    console.log('using transitions for menus');
    // Use CSS transitions for the fade
    $('.primary-nav li:not(.has-columns) ul > li').append('<span class="nav-arrow"></span>');
    $('.primary-nav li:not(.has-columns) ul > li:has(ul) > span').css('display', 'block');

  } else {
    console.log('using jquery fade for menus');
    // css('visibility', 'visible') to undo the visibility hide/show stuff in CSS (to support IE8 display fading)

    $('.primary-nav li:not(.has-columns) ul > li').append('<span class="nav-arrow"></span>');
    $('.primary-nav li:not(.has-columns) ul > li:has(ul) > span').css('display', 'block');

    $('.primary-nav > ul > li > ul').css('visibility', 'visible').hide();
    $('.primary-nav > ul > li:has(ul)').hover(
      function() {
        //show its submenu
        $(this).find('> ul').fadeIn(100);
      },
      function() {
        //hide its submenu
        $(this).find('> ul').fadeOut(300);
      }
    );
  }

  $('li.column-2 > a').removeAttr('href').addClass("column-title");
  $('li.column-3 > a').removeAttr('href').addClass("column-title");
  $('li.column-4 > a').removeAttr('href').addClass("column-title");
  $('li.column-5 > a').removeAttr('href').addClass("column-title");
});