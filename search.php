<?php
/*
Template Name: Search Page
*/
?>
 <?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);

?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>



<?php get_header(); ?>

 <div class="wrapper">
     <div class="content-wrap">
  
    <?php get_template_part( 'parts/secondary', 'nav' ); ?> 
    
    <main>
    
    <?php get_template_part( 'parts/search', 'title' ); ?>  
    <?php get_template_part( 'parts/secondary', 'search2' );?>

     
    
    </main>
   </div> <!-- End .content-wrap -->   
</div><!--end wrapper-->
    
 
<?php get_footer(); ?>
