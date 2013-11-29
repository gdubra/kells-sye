<?php
add_action('after_setup_theme', 'wp_setup_theme_hook');
function wp_setup_theme_hook() {
	if(function_exists('add_theme_support')) {
		add_theme_support( 'post-thumbnails' );
		//declarar thumbs
		add_image_size( '', 290, 414, false);
		
	}
	
	load_theme_textdomain( 'sye', get_template_directory() . '/languages' );
}



/**
 * Agregamos los tipos personalizados para el website
 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'Video',
		array(
			'labels' => array(
				'name' => __( 'Videos' ),
				'singular_name' => __( 'Video' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('post_tag','category'),
	    'supports' => array( 'title', 'editor', 'comments','tags', 'excerpt')
		)
	);
	
	register_post_type( 'Foto',
		array(
			'labels' => array(
				'name' => __( 'Fotos' ),
				'singular_name' => __( 'Foto' )
			),
		'public' => true,
		'has_archive' => true,
	    'supports' => array( 'title', 'editor', 'comments', 'excerpt','tags')
		)
	);

}
?>