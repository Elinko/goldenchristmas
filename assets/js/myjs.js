$(function() {
  
$('.slick-responsive').slick({
  
  arrows: true,
  infinite: false,
  speed: 300,
  autoplay: true,
  slidesToShow: 4,
  slidesToScroll: 1, 
  // itemSelector: '> a',
  // centerMode: true, 
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3, 
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2, 
        arrows: false,

      }
    },
    // {
    //   breakpoint: 480,
    //   settings: {
    //     slidesToShow: 1,
    //     slidesToScroll: 1
    //   }
    // }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.slick-responsive').slickLightbox()

});
 
$( '.woof_remove_ppi' ).ready( function(){
  
  $('.woof_remove_ppi').text('Na sklade')
});


     

