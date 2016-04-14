 <section class="content-area">
       <div class="content">
       <p></p>
        <?php get_search_form(); ?>
        <p></p>
       	<h1>Search Results</h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2 class="post-title">
	<a href="<?php the_permalink()?>" ><?php the_title(); ?></a>
	</h2>
<?php endwhile; else: ?>
       <div class="entry"><h2><?php _e('Sorry, no posts matched your Search criteria.'); ?></h2></div>
  <?php endif; ?>
<!--	There were: <strong><?php echo $total_results; ?></strong> search results. -->



       </div>
      </section>