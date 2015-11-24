<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Paris Attacks</title>
  <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
  <script src="nyt.js" type="text/javascript"></script>
</head>

<a href="http://api.nytimes.com/svc/search/v2/articlesearch">Find Articles</a>
<div id="results"></div>

<body>

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
    echo "<div class='twitter-tweet'>Tweet: " . $items['text'] . "'</div>'";
    echo "When: " . $items['created_at'] . "</br>";
  }

?>
</body>
</html>
