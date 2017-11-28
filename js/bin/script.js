$( document ).ready(function(){
  $('.slider').slider({
    height: 650
  });
  $(".button-collapse").sideNav();
  $('.materialboxed').materialbox();
  $('.scrollspy').scrollSpy({
    scrollOffset:50
  });

  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });
  $('ul.tabs').tabs();
});

$(document).ready(function(){
  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if(scroll > 100){
      if(!flag){
        //aqui es blanco
        $( ".main-nav" ).addClass( "scrolling" );
        $(".main-nav__image").attr("src","img/logo-second.jpg");

        
        flag = true;
      }
    }else{
      if(flag){
        //aqui es transparente
        $( ".main-nav" ).removeClass( "scrolling" );
        $(".main-nav__image").attr("src","img/logo.png");

          
        flag = false;
      }
    }
  });
});

$(function() {
    $(window).load(function() {
      $('#preloader').fadeOut('slow');
    });
 });



