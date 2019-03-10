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

$('.menu-item').click(function() {
  $('.navbar-collapse').toggleClass('show');
  $('.navbar-toggler').toggleClass('change');
});

$('wrap').click(function() {
  $('.navbar-collapse').toggleClass('show');
  $('.navbar-toggler').toggleClass('change');
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

$(document).ready(function() {
  $('.curriculo p').attr('class', 'text-curriculo');

	AOS.init();

  $(".owl-carousel").owlCarousel({
		loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
						nav:false,

        },
        600:{
            items:2,
            nav:false
        },
    }
	});
});