// initialize global environment
(function($){
	$(window).ready(function(){		
	
		// Load Facebook SDK
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=168926043221899";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
		
		$('a[target="panel"]').panel({'close':'<a>CLOSE</a>'});
		
		$("#send_newsletter_btn").click(function(){
			$('#Newsletter').submit();
		});		
		
	});

})(jQuery);