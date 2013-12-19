<?php

global $tpl_dir, $img_dir;


?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="contenido">
		  <div class="contenido-interno">
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
					        while ( have_posts()) : the_post();
					          $index ++;
					          $image = wp_get_attachment_image_src( get_post_thumbnail_id(), '174_x_130' );
					          ?>
					          <li>
					          	<a href="<?php the_permalink() ?>">
					          		<img src="<?php echo $image[0] ?>" width="290" height="218" alt="<?php the_title() ?>" /><br />
									<span><?php echo the_time('d.m.Y');?></span><br /><?php the_title() ?>
								</a></li>
					          <?php 
					        endwhile;
					        ?>
					      </ul>
					</div>
					<?php include('includes/paginador.php'); ?>
		  		</div>
			</div>
		</div>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>

