<div id="header-nav">
	<div class="content-wrap">
         <?php 
		 if ( has_nav_menu( 'header-menu')) {
		    wp_nav_menu(array( 
		      'theme_location' => 'header-menu',
			  'menu' => 'header-menu',
		      'orderby' => 'menu_order' 
			   )
			  );
		  }
			?>
    </div>
</div>