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
    <!--APIs-->
  <script src="nyt.js" type="text/javascript"></script>
  <script src="instagram.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvXjwRiZPKaa4P17MqaRuY3AGn1MzYA2Y&callback=initMap"></script>
  <script src="tweetLinkIt.js"></script>
  <script src="map.js"></script>
  <script>function pageComplete(){ $('.tweet').tweetLinkify();}</script>
  <style type="text/css"> html, body { height: 100%; margin: 0; padding: 0; } #map { height: 100%; }</style>
</head>

<body onload="initMap()">
  <div class="container-fluid">
    <div class="row">
      <h1>Paris Attacks</h1>
      <div class="mobile-nav hidden-lg hidden-md">
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
      <div class="container-fluid">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
              </button>
          <div class="collapse navbar-collapse navbar-menubuilder">
              <ul class="nav navbar-nav navbar-left">
                  <li><a href="/">Twitter</a>
                  </li>
                  <li><a href="/">Instagram</a>
                  </li>
                  <li><a href="/">Google Maps</a>
                  </li>
                  <li><a href="/">New York Times Articles</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  </div>
      <p>information about attacks</p>
  <!-- <a href="http://api.nytimes.com/svc/search/v2/articlesearch">Find Articles</a> -->
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

        echo "<div class='twitter-tweet tweet'>Tweet: " . $items['text'] . "'</div>'";
        echo "<div class='twitter-div'>";
        echo "<div class='tweet-div'><div class='float-left twitpic'><a target='_blank' href='http://www.twitter.com/" . $userArray['screen_name'] . "'><img class='twitter-pic' target='_blank' src='" . $userArray['profile_image_url'] . "'></a></div>";
        echo "<a target='_blank' href='http://www.twitter.com/" . $userArray['screen_name'] . "'><span class='name bold'>" . $userArray['name'] . "</span>   </br><span class='handle'>@" . $userArray['screen_name'] . "</span></a>  <span class='font-small'>&sdot; ";
        echo $date->format( 'M jS' ) . "</span></br>";
        echo "<div class='tweet'>" . $items['text'] . "</div>";
        echo "<a target='_blank' href='" . $tweetMedia['expanded_url'] . "'><img class='twitter-media' target='_blank' src='" . $tweetMedia['media_url'] . "'></a>";
        echo "<a target='_blank' href='" . $tweetMedia1['expanded_url'] . "'><img class='twitter-media' target='_blank' src='" . $tweetMedia1['media_url'] . "'></a>";
        echo "<a target='_blank' href='" . $tweetMedia2['expanded_url'] . "'><img class='twitter-media' target='_blank' src='" . $tweetMedia2['media_url'] . "'></a>";
        echo "<a target='_blank' href='" . $tweetMedia3['expanded_url'] . "'><img class='twitter-media' target='_blank' src='" . $tweetMedia3['media_url'] . "'></a>";
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

      echo "<script>pageComplete();</script>;"
    ?>
    <!--Instagram-->
    <div class="sections">
      <h3>Instagram</h3>
    <div data-role="page" id="pageone">
      <div data-role="header">
        <div id="instagram"></div>
        <a href="http://jelled.com/instagram/lookup-user-id"></a>
    </div>
  </div>
</div>
    <!--Google Maps-->
    <div class="sections">
      <h3>Google Maps</h3>
        <div class="markers">
          <p>Click on the map markers to read about each attack area</p>
          <div id="map"></div>
        </div>
    </div>
      <!--NYT Articles-->
      <div class="sections">
        <h3>New York Times Articles</h3>
        <p>Read more about the Paris Attacks in the <a href="http://www.nytimes.com/news-event/attacks-in-paris">New York Times</a><p>
        <div id="nyt"></div>
      </div>
</div>
</body>
</html>
