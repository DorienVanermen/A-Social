<?php

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

function studant_Includes() {

	//Styles
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesomemin', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('dataTables', get_template_directory_uri() . '/css/jquery.dataTables.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('theme-css', get_template_directory_uri() . '/css/theme.css', array(), '1.0.0', 'all');

	//Scripts
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
	wp_enqueue_script('dataTables', get_template_directory_uri() . '/js/jquery.dataTables.min.js', array(), '1.0.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
	
}

function wp_get_attachment( $attachment_id ) {

$attachment = get_post( $attachment_id );
return array(
    'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
    'caption' => $attachment->post_excerpt,
    'description' => $attachment->post_content,
    'href' => get_permalink( $attachment->ID ),
    'src' => $attachment->guid,
    'title' => $attachment->post_title
);
}

function studant_Setup() {

	//Menu kunnen creëeren activeren
	add_theme_support('menus');
	//Nav Menu
	register_nav_menus( array( 'primary' => __('Primary Menu','Main')));
	//Featured image activeren
	add_theme_support('post-thumbnails');
}

//Change text
function modify_read_more_link() {
    return '<div class="nieuws-post-button"><a class="btn btn-default btn-lg" href="' . get_permalink() . '">MEER LEZEN</a></div>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


//Load functions
add_action('wp_enqueue_scripts', 'studant_Includes');
add_action('init', 'studant_Setup');


?>
