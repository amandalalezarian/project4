<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Paris Attacks</title>
  <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="nyt.js" type="text/javascript"></script>
  <script src="instagram.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="tweetLinkIt.js"></script>
  <script>function pageComplete(){
       $('.tweet').tweetLinkify();
   }
   </script>
   <style type="text/css">
     html, body { height: 100%; margin: 0; padding: 0; }
     #map { height: 100%; }
   </style>
</head>

<body onload="initializeMap()">
  <div class="container">
      <h1>Paris Attacks</h1>
  <!-- <a href="http://api.nytimes.com/svc/search/v2/articlesearch">Find Articles</a> -->
  <div class="row">
    <?php
    ini_set('display_errors', 1);
    require_once('TwitterAPIExchange.php');

    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    $settings = array(
        'oauth_access_token' => "271176786-KIMp4v5tGPmtgDA5y0kUezA3T6UslB7ar0PNwSf6",
        'oauth_access_token_secret' => "x3A6W6kRPYYmPt618tECf4kOubwFOwcIaOKafGnKX09xQ",
        'consumer_key' => "qILrgSbzVhLP2fI7dR5FbMxLS",
        'consumer_secret' => "3CIgjjoRpKTjgXt3LC8mVdlfEsQUoGNqNe1br7A0JxUgCaIIZs"
    );

    // /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
    // $url = 'https://api.twitter.com/1.1/search/tweets.json';
    // $requestMethod = 'POST';
    //
    // /** POST fields required by the URL above. See relevant docs as above **/
    // $postfields = array(
    //     'screen_name' => 'usernameToBlock',
    //     'skip_status' => '1'
    // );
    //
    // /** Perform a POST request and echo the response **/
    // $twitter = new TwitterAPIExchange($settings);
    // echo $twitter->buildOauth($url, $requestMethod)
    //              ->setPostfields($postfields)
    //              ->performRequest();
    //
    // /** Perform a GET request and echo the response **/
    // /** Note: Set the GET field BEFORE calling buildOauth(); **/
    $url = 'https://api.twitter.com/1.1/search/tweets.json';
    $getfield = '?q=paris';
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange($settings);
    // echo $twitter->setGetfield($getfield)
    //              ->buildOauth($url, $requestMethod)
    //              ->performRequest();

    $tweetData = json_decode($twitter->setGetfield($getfield)
                  ->buildOauth($url, $requestMethod)
                  ->performRequest(),$assoc = TRUE);

    echo $tweetData;

    foreach($tweetData['statuses'] as $items)
      {
        echo "<div class='twitter-tweet tweet'>Tweet: " . $items['text'] . "'</div>'";

        echo "When: " . $items['created_at'] . "</br>";
      }

      echo "<script>pageComplete();</script>;"

    ?>
    <div>
      <div id="instagram"></div>
      <a href="http://jelled.com/instagram/lookup-user-id"></a>
    </div>
  </div>
  <div id="map"></div>
  <div>
    <h3>In the News</h3>
    <p>Read more about the Paris Attacks in the <a href="http://www.nytimes.com/news-event/attacks-in-paris">New York Times</a><p>
    <div id="nyt"></div>
  </div>
</div>
  <script type="text/javascript">
  var map;
  function initMap() {
    var myLatLng = {lat: 40.7220759, lng: -73.6528131};


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
      '<h1 id="firstHeading" class="firstHeading">Cold Spring Harbor Laboratory</h1>'+
      '<div id="bodyContent">'+
      '<img src="images/dna.png">'+
      '<p><b>The Cold Spring Harbor Labs</b> (CSHL) is a private, non-profit institution with research programs focusing on cancer, neuroscience, plant genetics, genomics and quantitative biology.'+
      'It is one of 68 institutions supported by the Cancer Centers Program of the U.S. National Cancer Institute (NCI) and has been an NCI-designated Cancer Center since 1987'+
      'The Laboratory is one of a handful of institutions that played a central role in the development of molecular genetics and molecular biology.</p>' +
      '<p>Attribution: Cold Spring Harbor Laboratory <a href="https://en.wikipedia.org/wiki/Cold_Spring_Harbor_Laboratory">'+
      'https://en.wikipedia.org/wiki/Cold_Spring_Harbor_Laboratory</a> '+
      '</p>'+
      '</div>'+
      '</div>';

  var content3 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Fencers Club</h1>'+
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
      '<h1 id="firstHeading" class="firstHeading">Jones Beach State Park</h1>'+
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

  var infowindow = new google.maps.InfoWindow({
    content: contentString
    });


    var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });

  var marker2 = new google.maps.Marker({
  position: {lat: 40.8592007, lng: -73.4708928},
  map: map,
  title: 'Marker 2!'
  });

  var marker3 = new google.maps.Marker({
  position: {lat: 40.7480448, lng: -73.9970677},
  map: map,
  title: 'Marker 3!'
  });

  var marker4 = new google.maps.Marker({
  position: {lat: 40.5963309, lng: -73.5102749},
  map: map,
  title: 'Marker 4!'
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

      var flightPlanCoordinates = [
          {lat: 40.8592007, lng: -73.4708928},
          {lat: 40.7480448, lng: -73.9970677},
          {lat: 40.5963309, lng: -73.5102749},
          {lat: 40.8592007, lng: -73.4708928}
        ];
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        flightPath.setMap(map);
      }


      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvXjwRiZPKaa4P17MqaRuY3AGn1MzYA2Y&callback=initMap">
      </script>
</div>
</body>
</html>
