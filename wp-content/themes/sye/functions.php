<?php
add_action('after_setup_theme', 'wp_setup_theme_hook');
function wp_setup_theme_hook() {
	if(function_exists('add_theme_support')) {
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'home-carrousel-thumb', 630, 425, true);
		add_image_size('blog-novedades-home-thum',260,195,true);
		
	}
	
	load_theme_textdomain( 'sye', get_template_directory() . '/languages' );
}

function home_blog_novedades_query(){
	 $args = array(
   	'post_type' => 'post',
	 'category_name' => CATEGORIA_BLOG_NOVEDADES,
   'orderby' => 'post_date',
   'order' => 'ASC'  
   );
    return new WP_Query($args);
}

function home_publicacion_recursos_query(){
	$args = array(
	   	'post_type' => 'post',
	   	'category_name' => CATEGORIA_PUBLICACIONES_RECURSOS,
	   'orderby' => 'post_date',
	   'order' => 'ASC'  
	);
	return new WP_Query($args);
}

function home_video_query(){
	$args = array(
		   	'post_type' => 'video',
		   	'orderby' => 'post_date',
		   'order' => 'ASC'  
	);
	return new WP_Query($args);
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
	    'supports' => array( 'title', 'editor', 'comments','tags', 'excerpt','post-formats')
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
	
	define('CATEGORIA_BLOG_NOVEDADES', 'Blog y Novedades');
	define('CATEGORIA_PUBLICACIONES_RECURSOS', 'Publicaciones y Recursos');

}

function include_style($css_name){
	$uri = get_stylesheet_directory_uri(). '/css/'.$css_name.'.css';
	echo "<link rel=\"stylesheet\" href=\"{$uri}\" type=\"text/css\" media=\"screen\" />";
}

function include_script($js_name){
	$uri = get_stylesheet_directory_uri(). '/js/'.$js_name.'.js';
	echo "<script src=\"{$uri}\" type=\"text/javascript\"></script>";
}

function get_category_url($category_name){
	return get_category_link(get_cat_ID($category_name));
}

function get_category_tag_url($category_name,$tag){
	return get_category_link(get_cat_ID($category_name)).'?tag='.$tag;
}
// add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );
?>