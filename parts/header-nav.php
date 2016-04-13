<div id="header-nav">
	<div class="content-wrap">
   <div class="hamburger"></div>  
  <!--    <img src="wp-content/themes/CAHNRSWP-Theme-WRPL/images/menu.png" alt="menu icon" class="menu-icon" width="40" height="40"> -->
  <!--   <div class="menu-icon"></div> -->
     <ul id="outside-header-nav-menu">
       

      <li><a href="/wrpl/">HOME</a></li>
         <li><a class="dropdown-toggle" href="learn/" >LEARN</a>
   <!--    <div id="accordion">  -->
   		
         <?php 
 
	
		 if ( has_nav_menu( 'header-menu')) {
		    wp_nav_menu(array( 
		      'theme_location' => 'header-menu',
			  'menu' => 'header-menu',
		      'orderby' => 'menu_order', 
			  'container' => 'ul',
			  'menu_class' => 'dropdown',
			   )
			 );
		  }
		  
	
			?>
 <!--            </div> -->
              </li>
            <li><a href="contact-us/">CONTACT US</a></li>   
      </ul>
     
    </div>
</div>