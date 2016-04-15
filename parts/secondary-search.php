 <section class="content-area">
       <div class="content">
       <p></p>
        <?php get_search_form(); ?>
        <p></p>
<!--        	<h1>Search Results</h1> -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--    <h3 class="search-title"> -->
 <div class="s-results">
	<a href="<?php the_permalink()?>" >
    <?php
//	echo '<article class="clearfix">';
    echo '<div class="search-thumb" >';
					if ( has_post_thumbnail($search->post->ID) ) {
       				   the_post_thumbnail(array(100, 100));
					} 
					else {
					  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
        . '/images/gallery-item-banner.jpg" width="100" height="100" />';
					}
				echo '</div>';
	?>			
	<?php the_title(); ?></a>
<!--	</h3> -->
    <p><?php the_excerpt(); ?></p>
    </div>
<?php 
// echo '</article>'; 

endwhile; else: ?>
       <div class="entry"><h2><?php _e('Sorry, no posts matched your Search criteria.'); ?></h2></div>
  <?php endif; ?>
<!--	There were: <strong><?php echo $total_results; ?></strong> search results. -->



       </div>
      </section>