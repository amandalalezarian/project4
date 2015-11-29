var map;
function initMap() {
  var myLatLng = {lat: 48.8567, lng: 2.3508};


  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.HYBRID,
  });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Adelphi University</h1>'+
      '</div>'+
      '</div>';

var content2 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Stad De France</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/dna.png">'+
    '<p>A suicide bomber detonated an explosives belt near Gate D of the Stade de France, where France and Germany were playing an exhibition soccer match. Two bodies were discovered at the location: that of the bomber and of a victim of the explosion.</p>' +
    '<p>Attribution: The New York Times <a href="http://www.nytimes.com/interactive/2015/11/13/world/europe/paris-shooting-attacks.html">'+
    'http://www.nytimes.com/interactive/2015/11/13/world/europe/paris-shooting-attacks.html</a> '+
    '</p>'+
    '</div>'+
    '</div>';

var content3 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Le Carillon</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/fencers.png">'+
    '<p><b>Fencers Club</b> is the oldest continuously existing organization in the Western Hemisphere dedicated exclusively to teaching and promoting the sport of fencing.'+
    'The park – 6.5 miles (10.5 km) in length[5] – is renowned for its beaches (which, excepting the Zachs Bay,'+
    'It is a member of the Metropolitan Division of the U.S. Fencing Association Established in Manhattan in 1883, the club has evolved into a broadly diverse 501(c)3 not-for-profit fencing organization dedicated to fencing, learning, character and community service. It has produced numerous National Champions and olympians.</p>' +
    '<p>Attribution: Fencers Club <a href="https://en.wikipedia.org/wiki/Fencers_Club">'+
    'https://en.wikipedia.org/wiki/Fencers_Club</a> '+
    '</p>'+
    '</div>'+
    '</div>';

var content4 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Le Petit Cambodge</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/beach.png">'+
    '<p><b>Jones Beach State Park</b> (colloquially, "Jones Beach") is a state park of the U.S. state of New York. It is located in southern Nassau County, in the hamlet of Wantagh, on Jones Beach Island, a barrier island linked to Long Island by the Meadowbrook State Parkway, Wantagh State Parkway, and Ocean Parkway.'+
    'The park – 6.5 miles (10.5 km) in length[5] – is renowned for its beaches (which, excepting the Zachs Bay,'+
    'face the open Atlantic Ocean) and furnishes one of the most popular summer recreational locations for the New York metropolitan area. It is the most popular and heavily visited beach on the East Coast, with an estimated six million visitors per year.</p>' +
    '<p>Attribution: Jones Beach State Park <a href="https://en.wikipedia.org/wiki/Jones_Beach_State_Park">'+
    'https://en.wikipedia.org/wiki/Jones_Beach_State_Park</a> '+
    '</p>'+
    '</div>'+
    '</div>';

var content5 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Cafe Bonne Bière</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/beach.png">'+
    '<p><b>Jones Beach State Park</b> (colloquially, "Jones Beach") is a state park of the U.S. state of New York. It is located in southern Nassau County, in the hamlet of Wantagh, on Jones Beach Island, a barrier island linked to Long Island by the Meadowbrook State Parkway, Wantagh State Parkway, and Ocean Parkway.'+
    'The park – 6.5 miles (10.5 km) in length[5] – is renowned for its beaches (which, excepting the Zachs Bay,'+
    'face the open Atlantic Ocean) and furnishes one of the most popular summer recreational locations for the New York metropolitan area. It is the most popular and heavily visited beach on the East Coast, with an estimated six million visitors per year.</p>' +
    '<p>Attribution: Jones Beach State Park <a href="https://en.wikipedia.org/wiki/Jones_Beach_State_Park">'+
    'https://en.wikipedia.org/wiki/Jones_Beach_State_Park</a> '+
    '</p>'+
    '</div>'+
    '</div>';

var content6 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">La Belle Equipe</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/beach.png">'+
    '<p><b>Jones Beach State Park</b> (colloquially, "Jones Beach") is a state park of the U.S. state of New York. It is located in southern Nassau County, in the hamlet of Wantagh, on Jones Beach Island, a barrier island linked to Long Island by the Meadowbrook State Parkway, Wantagh State Parkway, and Ocean Parkway.'+
    'The park – 6.5 miles (10.5 km) in length[5] – is renowned for its beaches (which, excepting the Zachs Bay,'+
    'face the open Atlantic Ocean) and furnishes one of the most popular summer recreational locations for the New York metropolitan area. It is the most popular and heavily visited beach on the East Coast, with an estimated six million visitors per year.</p>' +
    '<p>Attribution: Jones Beach State Park <a href="https://en.wikipedia.org/wiki/Jones_Beach_State_Park">'+
    'https://en.wikipedia.org/wiki/Jones_Beach_State_Park</a> '+
    '</p>'+
    '</div>'+
    '</div>';

var content7 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Le Comptoir Voltaire</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/beach.png">'+
    '<p><b>Jones Beach State Park</b> (colloquially, "Jones Beach") is a state park of the U.S. state of New York. It is located in southern Nassau County, in the hamlet of Wantagh, on Jones Beach Island, a barrier island linked to Long Island by the Meadowbrook State Parkway, Wantagh State Parkway, and Ocean Parkway.'+
    'The park – 6.5 miles (10.5 km) in length[5] – is renowned for its beaches (which, excepting the Zachs Bay,'+
    'face the open Atlantic Ocean) and furnishes one of the most popular summer recreational locations for the New York metropolitan area. It is the most popular and heavily visited beach on the East Coast, with an estimated six million visitors per year.</p>' +
    '<p>Attribution: Jones Beach State Park <a href="https://en.wikipedia.org/wiki/Jones_Beach_State_Park">'+
    'https://en.wikipedia.org/wiki/Jones_Beach_State_Park</a> '+
    '</p>'+
    '</div>'+
    '</div>';

var content7 = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Bataclan</h1>'+
    '<div id="bodyContent">'+
    '<img src="images/beach.png">'+
    '<p><b>Jones Beach State Park</b> (colloquially, "Jones Beach") is a state park of the U.S. state of New York. It is located in southern Nassau County, in the hamlet of Wantagh, on Jones Beach Island, a barrier island linked to Long Island by the Meadowbrook State Parkway, Wantagh State Parkway, and Ocean Parkway.'+
    'The park – 6.5 miles (10.5 km) in length[5] – is renowned for its beaches (which, excepting the Zachs Bay,'+
    'face the open Atlantic Ocean) and furnishes one of the most popular summer recreational locations for the New York metropolitan area. It is the most popular and heavily visited beach on the East Coast, with an estimated six million visitors per year.</p>' +
    '<p>Attribution: Jones Beach State Park <a href="https://en.wikipedia.org/wiki/Jones_Beach_State_Park">'+
    'https://en.wikipedia.org/wiki/Jones_Beach_State_Park</a> '+
    '</p>'+
    '</div>'+
    '</div>';


var infowindow2 = new google.maps.InfoWindow({
content: content2
});

var infowindow3 = new google.maps.InfoWindow({
content: content3
});

var infowindow4 = new google.maps.InfoWindow({
content: content4
});

var infowindow5 = new google.maps.InfoWindow({
content: content5
});

var infowindow6 = new google.maps.InfoWindow({
content: content6
});

var infowindow7 = new google.maps.InfoWindow({
content: content7
});

var infowindow8 = new google.maps.InfoWindow({
content: content8
});

var infowindow = new google.maps.InfoWindow({
  content: contentString
  });


var marker = new google.maps.Marker({
position: myLatLng,
map: map,
title: 'Hello World!'
});

var marker2 = new google.maps.Marker({
position: {lat: 48.9244627, lng: 2.3579705},
map: map,
title: 'Marker 2!'
});

var marker3 = new google.maps.Marker({
position: {lat: 48.8716462, lng: 2.3656832},
map: map,
title: 'Marker 3!'
});

var marker4 = new google.maps.Marker({
position: {lat: 48.871729, lng: 2.3660106},
map: map,
title: 'Marker 4!'
});

var marker5 = new google.maps.Marker({
position: {lat: 48.8688907, lng: 2.3658439},
map: map,
title: 'Marker 5!'
});

var marker6 = new google.maps.Marker({
position: {lat: 48.8689211, lng: 2.3504747},
map: map,
title: 'Marker 6!'
});

var marker7 = new google.maps.Marker({
position: {lat: 48.8503753, lng: 2.3909101},
map: map,
title: 'Marker 7!'
});

var marker8 = new google.maps.Marker({
position: {lat: 48.8630134, lng: 2.3684218},
map: map,
title: 'Marker 8!'
});

marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

marker2.addListener('click', function() {
    infowindow2.open(map, marker2);
  });

marker3.addListener('click', function() {
    infowindow3.open(map, marker3);
  });

marker4.addListener('click', function() {
    infowindow4.open(map, marker4);
  });

marker5.addListener('click', function() {
    infowindow5.open(map, marker5);
  });

marker6.addListener('click', function() {
    infowindow6.open(map, marker6);
  });

marker7.addListener('click', function() {
    infowindow7.open(map, marker7);
  });

marker8.addListener('click', function() {
    infowindow8.open(map, marker8);
  });

    // var flightPlanCoordinates = [
    //     {lat: 40.8592007, lng: -73.4708928},
    //     {lat: 40.7480448, lng: -73.9970677},
    //     {lat: 40.5963309, lng: -73.5102749},
    //     {lat: 40.8592007, lng: -73.4708928}
    //   ];
    //   var flightPath = new google.maps.Polyline({
    //     path: flightPlanCoordinates,
    //     geodesic: true,
    //     strokeColor: '#FF0000',
    //     strokeOpacity: 1.0,
    //     strokeWeight: 2
    //   });
    //
    //   flightPath.setMap(map);
    }
