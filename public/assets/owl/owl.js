

// best seller product carousel
$(document).ready(function(){
    var $bestSeller = $(".best_seller_carousel");

    $bestSeller.owlCarousel({
      loop:true,
      margin:20,
      nav:false,
      dots:false,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      smartSpeed:700,
      responsive:{
          0: {
              items: 1
          },
          576: {
              items: 2
          },
          1200: {
              items: 3
          }
      }
    });

    $(".best_seller_prev").on("click", function(){
      $bestSeller.trigger("prev.owl.carousel");
    });

    $(".best_seller_next").on("click", function(){
      $bestSeller.trigger("next.owl.carousel");
    });
  });
// best seller product carousel


// testimonial carousel
$(document).ready(function(){
    $(".testi_carousel").owlCarousel({
      items:1,
      loop:true,
      margin:0,
      nav:false,
      dots:true,
      autoplay:true,
      autoplayTimeout:6000,
      autoplayHoverPause:true,
      smartSpeed:700,
      animateOut:"fadeOut",
      animateIn:"fadeIn"
    });
  });
// testimonial carousel


// Owlcarousel
$(document).ready(function(){
    $(".owl-carousel").not(".best_seller_carousel, .testi_carousel").owlCarousel({
      loop:false,
      margin:30,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: false,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          320: {
              items: 1
          },
          360: {
              items: 1
          },
          375: {
              items: 1
          },
          480: {
              items: 3
          },
          768: {
              items: 3
          },
          991: {
              items: 3
          },
          1024: {
              items: 3
          },
          1199: {
              items: 5
          }
      }
    });
  });
  
  
  // Owlcarousel
  $(document).ready(function(){
    $(".owl-carousel_subs").owlCarousel({
      loop:true,
      margin:40,
      nav:true,
      autoplay:false,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: true,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          320: {
              items: 1
          },
          360: {
              items: 1
          },
          375: {
              items: 1
          },
          480: {
              items: 3
          },
          768: {
              items: 3
          },
          991: {
              items: 3
          },
          1024: {
              items: 3
          },
          1199: {
              items: 3
          }
      }
    });
  });

    // Owlcarousel
    $(document).ready(function(){
        $(".owl-carousel_csr").owlCarousel({
          loop:true,
          margin:40,
          nav:true,
          autoplay:false,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
          center: true,
          navText: [
              "<i class='fa fa-angle-left'></i>",
              "<i class='fa fa-angle-right'></i>"
          ],
          responsive:{
              320: {
                  items: 1
              },
              360: {
                  items: 1
              },
              375: {
                  items: 1
              },
              480: {
                  items: 1
              },

              767: {
                items: 1
              },
              768: {
                  items: 3
              },
              991: {
                  items: 3
              },
              1024: {
                  items: 3
              },
              1199: {
                  items: 3
              }
          }
        });
      });

    $('.owl-carousel_logo').owlCarousel({
          loop:true,
          margin:40,
          nav:true,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
          responsiveClass:true,
          navText: [
              "<i class='fa fa-angle-left'></i>",
              "<i class='fa fa-angle-right'></i>"
          ],
          responsive:{
            320: {
                items: 1
            },
            360: {
                items: 2
            },
            375: {
                items: 2
            },
            480: {
                items: 2
            },

            767: {
              items: 3
            },
            768: {
                items: 3
            },
            991: {
                items: 4
            },
            1024: {
                items: 5
            },
            1199: {
                items: 5
            }
        }
    });



    $('.owl-carousel_inter_logo').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsiveClass:true,
        // center: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
          320: {
              items: 1
          },
          360: {
              items: 2
          },
          375: {
              items: 2
          },
          480: {
              items: 2
          },

          767: {
            items: 3
          },
          768: {
              items: 3
          },
          991: {
              items: 4
          },
          1024: {
              items: 5
          },
          1199: {
              items: 5
          }
      }
  });
