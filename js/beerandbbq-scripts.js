jQuery(document).ready(function($){
  $('.beer-sponsor').hover(function(){
    /*$('.liquid').animate({
      top: '-10%'
    }, 1500, function(){
      $('.beer-sponsor h2').fadeOut('fast', function(){
        $('.sponsor-form').css('display', 'block').animate({
          opacity:'1',
          left:'0'
        }, 500);
      });
    });*/

    $('.beer-sponsor h2').delay(750).fadeOut(5);
    $('.liquid').animate({
      top:'-10%'
    }, 1500, function(){
      $('.sponsor-form').css('display', 'block').animate({
        opacity:'1',
        left:'0'
      }, 500);
    });

    $('.beer-foam').animate({
      bottom:'100%'
    }, 1500);
  });

  $('.flip-container').on('mouseenter', function(){
    $(this).addClass('hover');
  });
});