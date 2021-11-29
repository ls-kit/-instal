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

  // main slider 
  $('.main-slider').owlCarousel({
      items: 1,
      autoplay: true,
      autoplayTimeout: 6000,
      loop: true,
      dots: true,
  });

  // category slider 
  $('.category-slide').owlCarousel({
      autoplay: true,
      loop: true,
      dots: false,
      autoplayTimeout: 4000,
      nav: true,  
      navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
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
              margin: 15
          }
      }
  });

  // shop slider 
  $('.shop-slider').owlCarousel({
      margin: 20,
      items: 5,
      autoplay: true,
      loop: true,
      dots: false,
      autoplayTimeout: 4000,
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
              items:5
          }
      }
  });

  // ecommerce slider 
  $('.ecommerce-slide').owlCarousel({
      margin: 20,
      items: 5,
      autoplay: true,
      loop: true,
      dots: false,
      autoplayTimeout: 800,
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
              items:5
          }
      }
  });

  //tabs
  $('.tab').on('click', function(evt) {
    evt.preventDefault();
    $(this).toggleClass('active');
    var sel = this.getAttribute('data-toggle-target');
    $('.tab-content').removeClass('active').filter(sel).addClass('active');
    
    $('.info-tab span').removeClass("active");
    $(this).addClass("active");
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

  //qr button click
  $("#kit-qr-btn").click(function(){
      alert("hi");
      $(".kit-img img").html("<h1>hi</h1>");
  });

});


// slider 
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//google translator
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'it'}, 'google_translate_element');
}
