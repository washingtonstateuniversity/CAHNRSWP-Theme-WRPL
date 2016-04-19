<?php 
/* Add Menu options to theme  */
function register_my_menu() {

   register_nav_menus(
      array(
      'header-menu' => __( 'Header Menu' ),
	  'primary' => __( 'Main Navigation Menu' ),
	  'mobile-menu' => __( 'Mobile Menu' ),
	   ) 
	 );
   
 //  register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'register_my_menu' );

function set_container_class ($args) {
$args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}
add_filter ('wp_nav_menu_args', 'set_container_class');

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

//add video id between title and editor

add_action( 'edit_form_after_title', 'wrpl_create_new_metboax_context' );

function wrpl_create_new_metboax_context( $post ) {
	
	do_meta_boxes( null, 'custom-metabox-holder', $post );
}


function wrpl_add_custom_meta_box() {
 
        add_meta_box(
            'awesome_metabox_id',
            __( 'YouTube Video Data', 'wrpldev' ),
            'wrpl_render_metabox',
            'page',
            'custom-metabox-holder'    //placeholder for meta box between title and editor
        );
    
}
add_action( 'add_meta_boxes', 'wrpl_add_custom_meta_box' );

//Render metabox form fields
function wrpl_render_metabox($post) {

	$videoID = get_post_meta( $post->ID,'_wrpl_meta_box_text',TRUE );
    wp_nonce_field( 'wrpl_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <p>
        <div class="wrpl-meta-admin">
	    <label for="wrpl_meta_box_text">YouTube ID</label>
        <input type="text" name="_wrpl_meta_box_text" id="wrpl_meta_box_text" value="<?php echo $videoID; ?>" />
        </div>
    </p>    
 <?php

}

add_action( 'save_post', 'wrpl_save_custom_meta_box' ); 

// Save YouTube video ID in _wrpl_meta_box_text field
function wrpl_save_custom_meta_box ($post_id) {
	
	  // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'wrpl_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
	
	// Make sure your data is set before trying to save it
    if( isset( $_POST['_wrpl_meta_box_text'] ) )
        update_post_meta( $post_id, '_wrpl_meta_box_text', wp_kses( $_POST['_wrpl_meta_box_text'], $allowed ) );
	
}

function my_scripts_method() {
if ( !is_admin() ) {
	wp_enqueue_script('jquery-ui-accordion');
	wp_enqueue_script(
		'custom-dropdown',
		get_stylesheet_directory_uri() . '/js/menu.js',
		array('jquery')
		);
	
	
	}
}

add_action('wp_enqueue_scripts', 'my_scripts_method');



?>