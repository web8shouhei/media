$(document).ready(function(){
  $('.parallax').parallax();
  $(".dropdown-button").dropdown({
  	hover: true
  });
});
$(function(){
  
  /* PushPin Statement */
  var nav = $('.l-nav');
  var isNavTop = false;
  $(window).on('load scroll', function(){
    if(!isNavTop && nav.offset().top < $(this).scrollTop()){
      $('.l-header').css('margin-top', nav.outerHeight());
      nav.css('position', 'fixed').css('top', 0);
      isNavTop = true;
    } else if(isNavTop && $('.js-window-top').offset().top >= $(this).scrollTop()) {
      $('.l-header').css('margin-top', 0);
      nav.css('position', 'relative');
      isNavTop = false;
    }
  });

  /* Link click to access */
  $('a[href^="#"]').click(function(){
    var speed = 100;
    var href= $(this).attr("href");
    var target = $(this);
    var position = target.offset().top;
    var navHeight = $('.l-nav').outerHeight();
    $('body,html').animate({scrollTop : position - navHeight}, speed, 'swing');
    return false;
  });
});