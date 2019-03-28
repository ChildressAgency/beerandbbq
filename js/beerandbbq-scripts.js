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

  // Select all links with hashes
  $('.scroller').on('click', function (event){
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

    var targetId = $(this).attr('href');
    console.log(targetId);

    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function () {
        $('.collapse').collapse('hide');

        if(targetId == '#header'){
          $('a[href="#header"]').removeClass('collapsed');
        }

        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  });

  $('.collapse').on('shown.bs.collapse', function(){
    var $card = $(this).closest('.card');
    $('html,body').animate({
      scrollTop:$card.offset().top
    }, 1000, function(){
      $('a[href="#header"]').addClass('collapsed');
    });
  });
});