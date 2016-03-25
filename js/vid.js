// JavaScript Document
(function($){
		$(document).ready( function(){
			 $(".video-button").click(function(){
			 $(".video-embed").css({"opacity":"1","display":"block"});
			  $(".video-embed")[0].src += "&autoplay=1";
			  $(this).unbind("click");
	 		});
		} );
	})(jQuery)