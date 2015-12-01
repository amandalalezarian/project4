var html;

$(function() {
    var apiurl = "http://api.nytimes.com/svc/search/v2/articlesearch.json?q=paris&page=2&sort=oldest&api-key=7b954a84e8f84626dc7d720f15209d94:18:73493898"

    $.ajax({
      type: "GET",
      dataType: "json",
      cache: false,
      url: apiurl,
      success: parseData
    });

    function parseData(json){
      console.log(json);

      $.each(json.response.docs,function(i,data){
        console.log(data);
        html += '<h2><a href="' + data.web_url + '">'+ data.headline.main+'"</a></h2>';
        html += '<p>' + data.lead_paragraph + "</p>"
      });

      console.log(html);
      $("#results").append(html);

    }


 });
