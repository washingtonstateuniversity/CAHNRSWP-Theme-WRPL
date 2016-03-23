  <section>
    <div class="content-area">
    
      <?php $posts_page_id = get_option( 'page_for_posts' ); ?>
    <?php if (has_post_thumbnail( $posts_page_id ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page_id ), 'single-post-thumbnail' );
       $image = $image[0]; ?>
    <?php else :
       $image = get_bloginfo( 'stylesheet_directory') . '/images/home-banner-pic.jpg'; ?>
    <?php endif; ?>
    
     <div class="video-section" style="background-image: url('<?php echo $image; ?>');">

      Video button (image)
      </div>
     </div> 
  </section>
    