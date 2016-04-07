<?php get_header(); ?>

 <div class="wrapper">
     <div class="content-wrap">
  
    <?php get_template_part( 'parts/secondary', 'nav' ); ?> 
    
    <main>
    
    <?php get_template_part( 'parts/secondary', 'video' ); ?>
    <?php get_template_part( 'parts/secondary', 'title' ); ?>  
    <?php get_template_part( 'parts/secondary', 'content' );?>
    
    </main>
   </div> <!-- End .content-wrap -->   
</div><!--end wrapper-->
    
 
<?php get_footer(); ?>
