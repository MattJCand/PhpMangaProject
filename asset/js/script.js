
// Menu slide
$('.submenu-responsive').click(function(){

			$(this).children("ul").slideToggle();

})
$('ul').click(function(p){
	p.stopPropagation();

})


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
