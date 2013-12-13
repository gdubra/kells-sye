<?php

global $tpl_dir, $img_dir;

$taxonomy_slug = get_query_var( 'taxonomy' );
$the_tax = get_taxonomy( $taxonomy_slug );

// pr( $the_tax );

$term = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy_slug );
//pr( $term );

// busco galerias
$query = new WP_Query(array(
  'post_type' => 'galeria',
  'nopaging' => true,
  'orderby'=>"title",
  "order"=>"ASC",
  'tax_query' => array(
    array(
      'taxonomy' => $the_tax->name,
      'field' => 'slug',
      'terms' => $term->slug  
    ),
  )
));

//$esPeluqueria = $term->slug == "bano-y-peluqueria";

?>

<?php get_header(); ?>

<div id="contenido">
  <div id="contenido-interno">
    	<div class="ruta">
			<ul>
            	<li><a href="">Portada</a></li>
                <li><a href="">Publicaciones y Recursos</a></li>
            </ul>
       	</div>
        <div class="titulo">Galer&iacute;a de fotos</div>
        <div class="columna ancho-960">
        	<div class="galeria-fotos">
			      <ul>
			        <?php
			        $index = 0;
			        while ( $query->have_posts() ){
			          $index ++;
			          $query->the_post();
			          $image = wp_get_attachment_image_src( get_post_thumbnail_id(), '174_x_130' );
			          ?>
			          <li>
			          	<a href="<?php the_permalink() ?>">
			          		<img src="<?php echo $image[0] ?>" width="290" height="218" alt="<?php the_title() ?>" /><br />
							<span>10.11.2013</span><br /><?php the_title() ?>
						</a></li>
			          <?php 
			        }
			        ?>
			      </ul>
			</div>
  		</div>
	</div>
</div>

<?php get_footer(); ?>
