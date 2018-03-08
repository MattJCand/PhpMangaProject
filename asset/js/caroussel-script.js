$('.fade').slick({
	dots: true,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	arrows: false

});


// $('.responsive').slick({
//   infinite: true,
//   speed: 600,
//   arrows: false,
//   slidesToShow: 5,
//   slidesToScroll: 1,
//   cssEase: 'linear',
//   autoplaySpeed: 2000,
//   pauseOnFocus: false,
//   autoplay: true,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 8,
//         slidesToScroll: 1,
//         infinite: true,
        
//       }
//     },
//     {
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 7,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 5,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 425,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 1
//       }
//     }
    

   
//   ]
// });


$('.variable-width').slick({
  dots: false,
  infinite: true,
  speed: 700,
  arrows: false,
  autoplay:true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
});
    