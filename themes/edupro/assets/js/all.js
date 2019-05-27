$( document ).ready(function() {
    $('.owl-forth .owl-carousel').owlCarousel({
      loop:true,
      margin:30,
    //   nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
    });

    $('.partners .owl-carousel').owlCarousel({
      loop:true,
      margin:30,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2,
          nav:true
        },
        1000:{
          items:3
        }
      }
    });

    $('.owl-2 .owl-carousel').owlCarousel({
      loop:true,
      margin:0,
      nav: true,
      dots: false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2,
          nav:true
        },
        1000:{
          items:2
        }
      }
    });

    $('.owl-preferences .owl-carousel').owlCarousel({
      loop:true,
      margin:30,
      nav: true,
      dots: false,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:4
          }
      }
    });

    var totalItems = $('.owl-2 .item').length;

    if (totalItems <= 2) {
      var isLooped = false;
      var isNav = false;
    } 
    else {
      var isLooped = true;
      var isNav = true;
    }

    var totalItems_preferences = $('.owl-preferences .item').length;

    if (totalItems_preferences <= 4) {
      var isLooped = false;
      var isNav = false;
    } 
    else {
      var isLooped = true;
      var isNav = true;
    }
  });
$(document).ready(function () {
    $('.owl-2 .item:even').children().addClass('commendation--1')
        .children(":first-child").addClass("commendation__circle--big commendation__circle--big-1")
        .siblings(":nth-child(2)").addClass("commendation__circle--small commendation__circle--small-1")
        .siblings(":nth-child(3)").addClass("commendation__circle--small commendation__circle--small-1_1");
        
    $('.owl-2 .item:odd').children().addClass('commendation--2')
        .children(":first-child").addClass("commendation__circle--small commendation__circle--small-2")
        .siblings(":nth-child(2)").addClass("commendation__circle--small commendation__circle--small-2_2")
        .siblings(":nth-child(3)").addClass("commendation__circle--big commendation__circle--big-2");;
});

var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('googleMap'), {
        center: {
            lat: -34.397,
            lng: 150.644
        },
        zoom: 8
    });
}
$(document).ready(function () {
    $('.menu-toggle').click(function () {
        $('nav').toggleClass('active')
    })
    // $('.header__list-item').click(function () {
    //     $('.header__list-item').removeClass('active');
    //     $(this).addClass('active');
    // });
});
$(document).ready(function () {
    $(".js-example-placeholder-single").select2({
        placeholder: "Qeydiyyatdan keçmək istədiyiniz tədris proqramını seçin",
        allowClear: true
    });
});