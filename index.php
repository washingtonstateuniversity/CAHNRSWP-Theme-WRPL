<?php get_header(); ?>
 <main> 
   <ul>
      <?php   
	  
     if ( have_posts() ) { 
	   
	   get_template_part( 'parts/secondary', 'nav' );
	   
	   
			 while ( have_posts() ) {
				the_post(); 
					//	 
	   
		echo '<li><a href="' . get_permalink() . '" title="' . the_title_attribute() . '">';
					the_title(); 
				echo '</a></li>';
					//
				} // end while
      } //end if have_posts
			  
  ?>			  
  </ul>
</main>
<?php get_footer(); ?>