// JavaScript Document
(function($){
	$(document).ready( function(){
    
		$(".video-section.has-video > img").click(function(){
			var iframe = $(this).siblings("iframe");
			iframe.show();
			iframe[0].src += "&autoplay=1";
			});
		
	 });
})(jQuery)