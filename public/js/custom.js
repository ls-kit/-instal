$(document).ready(function(){
    //section animate
    AOS.init({
      once: false
    });
  
    //popup cross
    $("#cross-btn").click(function(){
      $("#popup-sec").css('display','none');
    });
  
    //sticky header
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 300) {
            $("#header").addClass("sticky");
        }else {
            $("#header").removeClass("sticky");
        }
    });
  
    // banner slider 
    $('.banner-slide').owlCarousel({
        items: 1,
        loop: false,
        dots: true,
    });

    // card slider 
    $('.main-slider').owlCarousel({
        items: 1,
        autoplay: true,
        animateOut: 'fadeOut',
        autoplayTimeout: 3000,
        loop: true,
        dots: false,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false
    });
  
    // category slider 
    $('.category-slide').owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        autoplayTimeout: 4000,
        nav: true,  
        navText: ["<i class='fas fa-arrow-circle-left'></i>", "<i class='fas fa-arrow-circle-right'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                margin: 10
            },
            577:{
                items:3,
                margin: 10
            },
            768:{
                items:4,
                margin: 10
            },
            1200: {
                items:5.6,
                margin: 15,
                slideBy: 3
            }
        }
    });
  
    // service slider 
    $('.service-slider').owlCarousel({
      autoplay: true,
      loop: true,
      dots: false,
      autoplayTimeout: 4000,
      nav: true,  
      navText: ["<i class='fas fa-arrow-circle-left'></i>", "<i class='fas fa-arrow-circle-right'></i>"],
      responsiveClass:true,
      responsive:{
              0:{
                  items:2,
                  margin: 10
              },
              577:{
                  items:3,
                  margin: 10
              },
              768:{
                  items:4,
                  margin: 10
              },
              1200: {
                  items:5.6,
                  margin: 15,
                  slideBy: 3
              }
          }
      });
  
    // shop slider 
    $('.shop-slider').owlCarousel({
        items: 5,
        autoplay: true,
        loop: true,
        dots: false,
        autoplaySpeed: 7000,
        slideTransition: 'linear',
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                margin: 10
            },
            577:{
                items:3,
                margin: 10
            },
            768:{
                items:4,
                margin: 10
            },
            1200: {
                items:5.6,
                margin: 15
            }
        }
    });

    $('.ecommerce-slide').owlCarousel({
        nav: false,
        loop: true,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 7000,
        slideTransition: 'linear',
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                margin: 10
            },
            577:{
                items:3,
                margin: 10
            },
            768:{
                items:4,
                margin: 10
            },
            1200: {
                items:5,
                margin: 20
            }
        }
    });

    //register tabs
    $('.register-tab').on('click', function(evt) {
      evt.preventDefault();
      $(this).toggleClass('active');
      var sel = this.getAttribute('data-toggle-target');
      $('.register-content').removeClass('active').filter(sel).addClass('active');
      
      $('.register-item a').removeClass("active");
      $(this).addClass("active");
    });
  
    $('.card').plate();
});
  
//google translator
function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'it'}, 'google_translate_element');
}
