      <?php  $posts_page_id = get_option( 'page_for_posts' ); 
	  
	  ?>
    <?php if (has_post_thumbnail( $posts_page_id ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page_id ), 'single-post-thumbnail' );
       $image = $image[0]; ?>
    <?php else :
       $image = get_bloginfo( 'stylesheet_directory') . '/images/home-banner-pic.jpg'; ?>
    <?php endif; ?>
    
<?php //$videoID = get_post_meta($post->ID, 'video_url', true);?>

<?php $videoID = get_post_meta( $post->ID,'_wrpl_meta_box_text',TRUE ); ?>
 
 <section class="video-section <?php if( $videoID ) echo ' has-video';?>" style="background-image: url('<?php echo $image; ?>');">
    
 <img src="<?php echo get_bloginfo( 'stylesheet_directory') ?>/images/bg-cover.png" alt="bg-cover" />
<?php
// Get the video URL and put it in the $video variable
      
	
	// Check if there is in fact a video URL

	
if ($videoID) {
 
  
	     echo  '<iframe class="video-embed" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/' . $videoID .'?rel=0&color=white&controls=0&showinfo=0" replaced="true"></iframe>';

}

	
?>
  
     
   
      
 
  </section>
    