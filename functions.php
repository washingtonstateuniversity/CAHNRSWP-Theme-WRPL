<?php 
/* Add Menu options to theme  */
function register_my_menu() {

   register_nav_menus(
      array(
      'header-menu' => __( 'Header Menu' ),
	  'primary' => __( 'Main Navigation Menu' )
	   ) 
	 );
   
 //  register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'register_my_menu' );

/* Add Featured Image to theme  */
add_theme_support( 'post-thumbnails', array( 'page' ) );
set_post_thumbnail_size( 284, 188, true );

/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );

/* Add Category to Pages  */
function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );

if ( ! is_admin() ) {
 add_action( 'pre_get_posts', 'category_and_tag_archives' );
 
 }
function category_and_tag_archives( $wp_query ) {
$my_post_array = array('post','page');
 
 if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
 $wp_query->set( 'post_type', $my_post_array );
 
 if ( $wp_query->get( 'tag' ) )
 $wp_query->set( 'post_type', $my_post_array );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function enqueue_scripts() {
 wp_enqueue_script( 'video-overlay', get_bloginfo( 'stylesheet_directory' ) . '/js/vid.js', array( 'jquery' ), '1.0.0' );
}

add_action( 'edit_form_after_title', 'myprefix_edit_form_after_title' );
function myprefix_edit_form_after_title() {
    echo '<h2>YouTube Video ID</h2>';
}



?>