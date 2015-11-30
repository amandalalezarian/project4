// JavaScript Document


//Use this url below to get your access token
//https://instagram.com/oauth/authorize/?display=touch&client_id=CLIENT_ID_HERE&redirect_uri=REDIRECT_URI_HERE&response_type=token

//if you need a user id for yourself or someone else use:
//http://jelled.com/instagram/lookup-user-id


$(function instagram() {

	var apiurl = "https://api.instagram.com/v1/tags/prayforparis/media/recent?access_token=14890798.02fa985.a75ce2f80c274f968245ea5e658aae13&callback=?"
	var access_token = location.hash.split('=')[1];
	var html = ""

		$.ajax({
			type: "GET",
			dataType: "json",
			cache: false,
			url: apiurl,
			success: parseData
		});


		function parseData(json){
			console.log(json);

			$.each(json.data,function(i,data){
			//	html += '<p>Filter:"'+ data.filter+'"</p>';

			if (i<3) {
		 html += '<div class="instabox"> '
			//	html += '<a target="_blank" href="http://www.instagram.com/' + data.user.username + '">'

			//USER
			html += '<strong> <a target="_blank" href="http://www.instagram.com/' + data.user.username + '">' + data.user.username + '</span></a></strong>'

			//picture
			html += '<div class= "instapic"><img src ="' + data.images.low_resolution.url + '"></div>';

			//likes and caption
			html += '<div class="instagram-caption-div">'
			html += '&#9825;  ' + data.likes.count
			html += '<br><div class="chatbubble"></div>'
			html += '<span class="instagram-username-caption">'
			//html += '<strong> <a target="_blank" href="http://www.instagram.com/' + data.user.username + '">' + data.user.username + '</span></a></strong>'
			html += '<div class="hashtags">' + data.caption.text + '</div>'
			html += '</div>'

		}
			});

			//end row
			// html += '</div>'



			//end of loop
			// html += '</div> </div>'

			console.log(html);
			$("#instagram").append(html);

		}

 });
