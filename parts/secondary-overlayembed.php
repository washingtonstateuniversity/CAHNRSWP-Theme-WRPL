

    
      <?php  $posts_page_id = get_option( 'page_for_posts' ); 
	  
	  ?>
    <?php if (has_post_thumbnail( $posts_page_id ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $posts_page_id ), 'single-post-thumbnail' );
       $image = $image[0]; ?>
    <?php else :
       $image = get_bloginfo( 'stylesheet_directory') . '/images/home-banner-pic.jpg'; ?>
    <?php endif; ?>
   <div class="video-container" style="background-image: url('<?php echo $image; ?>');">

<div class="video-thumbnail">
       

<?php
// Get the video URL and put it in the $video variable
      $videoID = get_post_meta($post->ID, 'video_url', true);
	
	// Check if there is in fact a video URL
if ($videoID) {

   echo  '<div class="video-button">';
   echo  '<iframe class="video-embed" frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/' . $videoID .'?rel=0&color=white&controls=0&showinfo=0" replaced="true"></iframe>';

  //	echo '<div class="videoContainer" >';

	// Echo the embed code via oEmbed
  //	echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoID ); 
  //	echo '</div>'; 
  
  echo '</div>'; 

}
 ?>
 
</div>
</div>