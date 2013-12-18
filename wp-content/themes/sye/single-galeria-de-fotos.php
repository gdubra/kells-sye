<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<?php 
include_style('jquery.fancybox');
include_script('global');
include_script('jquery.fancybox.pack');
?>
<?php global $img_dir; ?> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php

$custom_fields = get_post_custom();
?>
<?php get_header(); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
		helpers		: {
			title	: { type : 'inside' }
		}
		});
	});
</script>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
	<div class="contenido">
		<div class="contenido-interno">
		    <div class="ruta">
				<ul>
		            <li><a href="">Portada</a></li>
		                <li><a href="">Publicaciones y Recursos</a></li>
		                <li><a href="">Galer&iacute;a de fotos</a></li>
		        </ul>
		    </div>
		   	<div class="titulo">fotos</div>
		    <div class="subtitulo"><?php the_title(); ?></div>
		    <div class="columna ancho-960">
			    <div class="galeria-fotos-detalle">
			            <ul>
			             <?php
					        foreach ( $custom_fields["fotos_de_la_galeria"] as $foto ){
					          $image = wp_get_attachment_image_src( $foto["ID"], '796_x_594' );
					          $thumb = wp_get_attachment_image_src( $foto["ID"], '174_x_130' );
					      ?>
			                <li>
			                	<div class="galeria-fotos-detalle-icono">
			                		<a class="fancybox" rel="group" href="<?php echo  $image[0]; ?>" title="<?php echo $foto["post_title"] ?>"></a>
			                	</div>
			                	<img src="<?php echo $image[0]; ?>" width="162" height="122" alt="<?php echo $foto["post_title"] ?>" />
			                </li>
			      			<?php 
			    			}
			    			?>
			           </ul>
			    </div>
		    </div>
		</div>
		</div>
	</div>
</div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
