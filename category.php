<?php get_header(); ?>
 <main>
    <?php get_template_part( 'parts/secondary', 'nav' ); ?> 
    <?php get_template_part( 'parts/category', 'title' ); ?>  

    <?php get_template_part( 'parts/secondary', 'excerpt' );?>
</main>


<?php get_footer(); ?>