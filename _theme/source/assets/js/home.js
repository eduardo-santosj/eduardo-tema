$(window).scroll(function() {
  if ($('.nav-bar').offset().top > 50) {
    $('.navbar-fixed-top').addClass('top-nav-collapse');
  } else {
    $('.navbar-fixed-top').removeClass('top-nav-collapse');
  }
});

$('.navbar-toggler').click(function() {
  $(this).toggleClass('change');
});

$(window).load(function() {
  $('.curriculo p').attr('class', 'text-curriculo');
});

$(document).ready(function(){
  $('a[href^="#"]').on('click',function () {

    var target = this.hash;
    var $target = $(target);
    var scroll;

    if($(window).scrollTop()==0){
      scroll =  ($target.offset().top) - 160
    } else{
      scroll =  ($target.offset().top) - 160
    }
    $('html, body').stop().animate({
      'scrollTop': scroll,
    }, 900, 'swing', function () {
      //window.location.hash = target;
    });
  });
});

