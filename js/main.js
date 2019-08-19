
/*================================
=            search-sec            =
================================*/
(function($){
  var searchOpen = $('.fa-search');
  var searchClose = $('.fa-times');
  var searchInput = $('.input');
  searchOpen.click(function(){
       $(this).css({
        display:'none',
       });
       searchClose.css({
        display   :'block',
       });
       searchInput.css({
        display   :'block',
       });
       // $('.input').slideDown(400);
    // $('.input').slideToggle();

  });
  searchClose.click(function(){
    $(this).css({
      display:'none',
    });
    searchOpen.css({
      display:'block',
    });
    $('.input').slideUp(0);
  });
})(jQuery);


$(document).ready(function(){

  $('.two').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    navText: [
      "<i class='icon-angle-left-icon'></i>",
      "<i class='icon-Path-1218'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 3
      },
      1200: {
        items: 4
      }
    }        
  })
            //  TESTIMONIALS CAROUSEL HOOK
  $('.one').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        navText: [
          "<i class='icon-angle-left-icon'></i>",
      "<i class='icon-Path-1218'></i>"
        ],
        autoplay: true,
        smartSpeed: 300,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }        
      })
  $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          }
        }        
      })


  /*======================================
  =            Hamburger Menu            =
  ======================================*/

  $(".ham").click(function() {
    $('.menu-link').slideToggle();
    $(this).toggleClass('active');
    $(this).toggleClass('sw-close');
    
  });

  /*=====  End of Hamburger Menu  ======*/

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 100) {
      $('#back2Top').fadeIn();
  } else {
      $('#back2Top').fadeOut();
  }
});
  $("#back2Top").click(function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  });

/*Scroll to top when arrow up clicked END*/










    });

