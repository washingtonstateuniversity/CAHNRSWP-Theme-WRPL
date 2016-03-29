<section>
<div id="home-gallery">
 <div class="content-wrap">
 <article>
  <?php 
	 if (is_front_page() ) {
		 
		$frontpage_id = get_option( 'page_on_front' );
	     
		$args = array(
		'post_type' => 'page',
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
  							?>
		
         <ul>
    		<?php if (has_post_thumbnail( $the_query->post->ID) ): ?>
		    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->post->ID ), array('284','188') );
		       $image = $image[0];?>
		    <?php else :
       			$image = get_bloginfo( 'stylesheet_directory') . '/images/gallery-item-banner.jpg'; ?>
		    <?php endif; ?>
               
          <li class="image"><img src="<?php echo $image; ?>" alt="home-gallery-image" /></li>
          
          <li class="title"><?php the_title();?></li>
          <li class="summary"><?php echo wp_trim_words(get_the_excerpt(),25,'...')?></li>
          <li class="link"><a href="<?php the_permalink(); ?>">More Info</a></li>
     </ul>
 </article><article>
   <?php			
			
    	 } // end while
        } //end if have_posts
		 
	 } // end if is_front_page
	wp_reset_postdata();
	 ?>
     </article>
  </div>
</div>
</section>