
// Menu slide
$('.submenu-responsive').click(function(){

			$(this).children("ul").slideToggle();

})
$('ul').click(function(p){
	p.stopPropagation();

})



// FACEBOOK

// (function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12&appId=1289751307812396&autoLogAppEvents=1';
//   fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));


//Google Map

function initMap() {
  var myLatLng = {lat: 43.473500, lng: 1.332152};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
