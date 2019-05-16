$( document ).ready(function() {
    $('.courses__elements .owl-carousel').owlCarousel({
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
    })
  });

  $( document ).ready(function() {
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
    })
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