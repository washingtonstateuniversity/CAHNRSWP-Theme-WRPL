// JavaScript Document
jQuery(document).ready(function () {
 jQuery('.hamburger').on('click', function(){

	jQuery('#outside-header-nav-menu').slideToggle('fast');
	
	});	
     if (document.documentElement.clientWidth < 700) {
		     
	
	jQuery('#outside-header-nav-menu a.dropdown-toggle').on('click', function(event) {
		event.preventDefault();
		jQuery(this).siblings('ul').slideToggle('fast');
		});
		
	 } else {
		 jQuery('#menu-pd-menu').hide();
		 }
		
}); 
