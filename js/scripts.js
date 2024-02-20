jQuery(document).ready(function($) {
  // $('.menu-principal .menu').slicknav();


  slider($);
  $('.btn-menuburguer').on('click', function(){
    $('.nav-mobile').toggle('flex')
  })
})

function slider($) {
  var slideCount = $('.slide').length;
  var slideWidth = $('.slide').width();
  var slideHeight = $('.slide').height();
  var sliderUlWidth = slideCount * slideWidth;

  $('.slider').css({ width: sliderUlWidth, marginLeft: - slideWidth });

  $('.slide:last-child').prependTo('.slider');

  function moveLeft() {
    $('.slider').animate({
      left: + slideWidth
    }, 500, function () {
      $('.slide:last-child').prependTo('.slider');
      $('.slider').css('left', '');
    });
  };

  function moveRight() {
    $('.slider').animate({
      left: - slideWidth
    }, 500, function () {
      $('.slide:first-child').appendTo('.slider');
      $('.slider').css('left', '');
    });
  };

  var autoSlide = setInterval(function () {
    moveRight();
  }, 2000);

  $('.slider-container').mouseenter(function () {
    clearInterval(autoSlide);
  }).mouseleave(function () {
    autoSlide = setInterval(function () {
      moveRight();
    }, 2000);
  });

  $('.prev').click(function () {
    moveLeft();
  });

  $('.next').click(function () {
    moveRight();
  });
}