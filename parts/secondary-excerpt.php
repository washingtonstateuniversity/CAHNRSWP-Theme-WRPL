   <section class="content-area">
       <div class="content">
         <div class="archive">
          <?php   
		  	$args = array(
		'post_type' => array('page','post',),
		'exclude' => $frontpage_id,
		'post_status' => 'publish',
		'orderby' => 'menu_order title',
		'order' => 'ASC', 
		'tax_query' => array(
			array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array( 'professional-development' ),
           ),   	
		  ),

	    );
		
			$the_query = new WP_Query( $args );
		
     if ( $the_query->have_posts() ) { 
			 while ( $the_query->have_posts() ) {
				$the_query->the_post(); 
					//
				echo '<article class="clearfix">';
				echo '<div class="archive-thumb" >';
					if ( has_post_thumbnail($the_query->post->ID) ) {
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
//					the_excerpt();
  echo substr(get_the_excerpt(), 0, 200);
  echo '<a href="' . get_the_permalink() .'" > more » </a>';					
					//	echo '<a href="' . get_permalink() . '" >more » </a></div>';
						echo '</article>';
					//
				} // end while
      } //end if have_posts
	  
  ?>	
 
         </div>
  <?php echo paginate_links( $args ); ?> 
       </div> <!-- class="content" -->
      </section>