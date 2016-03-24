   <section>
       <div class="content-area">
         <div class="archive">
          <?php   
     if ( have_posts() ) { 
			 while ( have_posts() ) {
				the_post(); 
					//
				echo '<article>';
				echo '<div class="archive-thumb">';
					if ( has_post_thumbnail() ) {
       				   the_post_thumbnail(array(100, 100));
					} 
					else {
					  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/gallery-item-banner.jpg" width="100" height="100" />';
					}
				echo '</div>';
	
				echo '<div class="archive-title"><h3>'	;
				echo '<a href="';
                echo get_permalink(); 
                echo '" title="';
				the_title_attribute(); 
				echo '">';
				the_title(); 
				echo '</a>';
					
     			echo '</h3></div>';
				echo '<div class="archive-excerpt">'	;	
					the_excerpt();
						echo '</div>';
						echo '</article>';
					//
				} // end while
      } //end if have_posts
	  
  ?>	
         </div>
  
       </div>
      </section>