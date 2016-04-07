<?php get_header(); ?>
<div class="wrapper">
     <div class="content-wrap">

    <?php get_template_part( 'parts/secondary', 'nav' ); ?> 
     <main>
    <?php get_template_part( 'parts/excerpt', 'title' ); ?>  
    <?php get_template_part( 'parts/secondary', 'excerpt' );?>

    </main>
   </div> <!-- End .content-wrap -->   
</div><!--end wrapper-->

<?php get_footer(); ?>