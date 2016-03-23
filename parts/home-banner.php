<section>
<div id="home-banner">
  <div class="content-wrap">
  <div class="table">
   <div class="table-row">
   	<div class="table-cell">
      <h1><?php bloginfo('description');?></h1>
    <p><?php 
	 if (is_front_page() ) {
		  if ( have_posts() ) { 
			 while ( have_posts() ) {
				the_post(); 
					//
					the_content();
					//
				} // end while
        	  } //end if have_posts
		 
	 } // end if is_front_page
	 ?></p>
     
    </div>
    <?php $posts_page_id = get_option( 'page_for_posts' ); ?>
    <?php if (has_post_thumbnail( $posts_page_id ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page_id ), 'single-post-thumbnail' );
       $image = $image[0]; ?>
    <?php else :
       $image = get_bloginfo( 'stylesheet_directory') . '/images/home-banner-pic.jpg'; ?>
    <?php endif; ?>

     <div class="table-cell-right" style="background-image: url('<?php echo $image; ?>');">
         
    </div> 
   </div>
  </div>
 
  </div>
 </div>
 </section>