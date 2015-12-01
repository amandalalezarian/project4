<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Paris Attacks</title>
  <!--Bootstrap-->
  <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
  <!--Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <!--APIs-->
  <script src="nyt.js" type="text/javascript"></script>
  <script src="instagram.js" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvXjwRiZPKaa4P17MqaRuY3AGn1MzYA2Y&callback=initMap"></script>
  <script src="tweetLinkIt.js"></script>
  <script src="map.js"></script>
  <script>function pageComplete(){ $('.tweet').tweetLinkify();}</script>
  <style type="text/css"> html, body { height: 100%; margin: 0; padding: 0; } #map { height: 100%; }</style>
</head>

<body onload="initMap()">
  <div class="container">
    <div class="row">
      <div class="header">
        <img class="mainlogo" width="25%" src="images/paris.png">
        <h1>Paris Attacks</h1>
      </div>
      <div class="mobile-nav hidden-lg hidden-md">
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
      <div class="container-fluid">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
          <div class="collapse navbar-collapse navbar-menubuilder">
              <ul class="nav navbar-nav navbar-left">
                  <li>
                    <span><img class="logos" width="10%" src="images/twitter.png"><a href="#twittersection">Twitter</a></span>
                  </li>
                  <li>
                      <span><img class="logos" width="10%" src="images/insta.png"><a href="#instasection">Instagram</a></span>
                  </li>
                  <li>
                      <span><img class="logos" width="10%" src="images/maps.png"><a href="#mapsection">Google Maps</a></span>
                  </li>
                  <li>
                      <span><img class="logos" width="10%" src="images/nyt.png"><a href="#nytsection">New York Times Articles </a></span>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  </div>
    <div class="intro">
      <h3>WHAT HAPPENED ON THE NIGHT:</h3>
      <p>On Friday November 13, deadly attacks in Paris by gunmen and suicide bombers hit a concert hall, a major stadium, restaurants and bars, almost simultaneously - leaving at least 129 people dead and hundreds wounded.
      <br>The attacks have been described by President Francois Hollande as an "act of war" organised by the Islamic State (IS) militant group.</p>
      </div>
      <div class="intro">
      <h3>TRENDING HASHTAGS</h3>
        <h4><b>#PrayForParis</b></h4>
          <p>Used to show support and connect with others in solidarity.</p>
        <h4><b>#PorteOuverte</b></h4>
          <p>Used to tell people they needed a safe place to go, or to advise people on the street they could offer shelter.</p>
    </div>
  <!-- <a href="http://api.nytimes.com/svc/search/v2/articlesearch">Find Articles</a> -->
    <div id="twittersection" class="lines">
        <div class="center">
          <span><img class="sections" width="15%" src="images/twitter.png"><h3>TWITTER</h3></span>
        </div>
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
    $getfield = '?q=porteouverte';
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange($settings);
    // echo $twitter->setGetfield($getfield)
    //              ->buildOauth($url, $requestMethod)
    //              ->performRequest();

    $tweetData = json_decode($twitter->setGetfield($getfield)
                  ->buildOauth($url, $requestMethod)
                  ->performRequest(),$assoc = TRUE);
$i = -1;
    foreach($tweetData['statuses'] as $items){
      $i++;
      if ($i < 3){



        $date = new DateTime( $items->created_at );
              $userArray = $items['user'];
              //steps for media array
              $entitiesArray = $items['entities'];
              $mediaArray = $entitiesArray['media'];
              $tweetMedia = $mediaArray[0];
              $tweetMedia1 = $mediaArray[1];
              $tweetMedia2 = $mediaArray[2];
              $tweetMedia3 = $mediaArray[3];
              $mediaResize = $tweetMedia['sizes']['thumb']['w'];

        echo "<div class='twitter-tweet tweet'>" . $items['text'] . "'</div>'";
        echo "<div class='twitter-div'>";
        echo "<div class='tweet-div'><div class='float-left twitpic'><a target='_blank' href='http://www.twitter.com/" . $userArray['screen_name'] . "'><img class='twitter-pic' target='_blank' src='" . $userArray['profile_image_url'] . "'></a></div>";
        echo "<a target='_blank' href='http://www.twitter.com/" . $userArray['screen_name'] . "'><span class='name bold'>" . $userArray['name'] . "</span>   </br><span class='handle'>@" . $userArray['screen_name'] . "</span></a>  <span class='font-small'>&sdot; ";
        echo $date->format( 'M jS' ) . "</span></br>";
        echo "<div class='tweet'>" . $items['text'] . "</div>";
        echo "<a target='_blank' href='" . $tweetMedia['expanded_url'] . "'><img class='twitter-media' target='_blank' width='100%' src='" . $tweetMedia['media_url'] . "'></a>";
        echo "<a target='_blank' href='" . $tweetMedia1['expanded_url'] . "'><img class='twitter-media' target='_blank' width='100%' src='" . $tweetMedia1['media_url'] . "'></a>";
        echo "<a target='_blank' href='" . $tweetMedia2['expanded_url'] . "'><img class='twitter-media' target='_blank' width='100%' src='" . $tweetMedia2['media_url'] . "'></a>";
        echo "<a target='_blank' href='" . $tweetMedia3['expanded_url'] . "'><img class='twitter-media' target='_blank' width='100%' src='" . $tweetMedia3['media_url'] . "'></a>";
        echo "<div class='tweet-options'>";
        echo "<div class='row row-height'>";
        echo "<div class='col-md-8 col-xs-8'><a target='_blank' href='" . $tweetMedia['expanded_url'] . "'><p class='expand'>Expand</p></a></div>";
        echo "<div class='col-md-4 col-xs-4'>";
        echo "<a target='_blank' href='https://twitter.com/intent/tweet?in_reply_to=" . $items['id'] . "'><div class='reply twitter-intent'></div></a>";
        echo "<a target='_blank' href='https://twitter.com/intent/retweet?tweet_id=" . $items['id'] . "'><div class='retweet twitter-intent'></div></a>";
        echo "<a target='_blank' href='https://twitter.com/intent/favorite?tweet_id=" . $items['id'] . "'><div class='favorite twitter-intent'></div></a>";
        echo "</div></div></div>";
        echo "<span class='border'></span></div>";
        echo "</div>";

      }

        }

      echo "<script>pageComplete();</script>;"
    ?>
  </div>
    <!--Instagram-->
    <!--explain #-->
    <div id="instasection" class="lines">
      <div class="center">
        <span><img class="sections" width="15%" src="images/insta.png"><h3>INSTAGRAM</h3></span>
      </div>
    <div data-role="page" id="pageone">
      <div data-role="header">
        <div id="instagram"></div>
        <a href="http://jelled.com/instagram/lookup-user-id"></a>
    </div>
  </div>
</div>
    <!--Google Maps-->
    <div id="mapsection" class="lines">
      <div class="center">
        <span><img class="sections" width="20%" src="images/maps.png"><h3>GOOGLE MAPS</h3></span>
      </div>
        <div>
          <p>Click on the map markers to read about each attack area</p>
        </div>
          <div id="map"></div>
        </div>
    </div>
      <!--NYT Articles-->
      <div id="nytsection">
        <div class="center">
          <span><img class="sections" width="15%" src="images/nyt.png"><h3>NEW YORK TIMES ARTICLES</h3>
        </div>
      <div>
        <p>Read more about the Paris Attacks in the <a href="http://www.nytimes.com/news-event/attacks-in-paris">New York Times</a><p>
      </div>
        <div id="nyt"></div>
      </div>
      <div class="footer">
        Amanda Lalezarian JOMC 586 Final December 2015
      </div>
</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>
