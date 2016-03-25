<?php get_header(); ?>

  <main>
  
    <?php get_template_part( 'parts/secondary', 'nav' ); ?> 
    <?php get_template_part( 'parts/secondary', 'video' ); ?>
    <?php get_template_part( 'parts/single', 'title' ); ?>  
    <?php get_template_part( 'parts/secondary', 'content' );?>
    
  </main>

<?php get_footer(); ?>