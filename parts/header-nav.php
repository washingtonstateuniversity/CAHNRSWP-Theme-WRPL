<div id="header-nav">
	<div class="content-wrap">
   <div class="hamburger"></div>  
     
     <ul id="outside-header-nav-menu">
       

      <li><a href="/">HOME</a></li>
         <li><a href="/learn/">LEARN</a></li>
       <div id="accordion">  
         <?php 
 
	
		 if ( has_nav_menu( 'header-menu')) {
		    wp_nav_menu(array( 
		      'theme_location' => 'header-menu',
			  'menu' => 'header-menu',
		      'orderby' => 'menu_order', 
			  'container' => false
			   )
			  );
		  }
		  
	
			?>
            <li><a href="/contact-us/">CONTACT US</a></li>   
      </ul>
      </div>
    </div>
</div>