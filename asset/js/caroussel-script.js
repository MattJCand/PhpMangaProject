$('.fade').slick({
	dots: false,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	arrows: false

});


$('.responsive').slick({
  infinite: true,
  speed: 600,
  arrows: false,
  slidesToShow: 8,
  slidesToScroll: 1,
  cssEase: 'linear',
  autoplaySpeed: 4000,
  pauseOnFocus: false,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 425,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
   
  ]
});