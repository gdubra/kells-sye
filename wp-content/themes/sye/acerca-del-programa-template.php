<?php
/*
Template Name: Acerca-del-programa
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				<div class="contenido">
					<div class="contenido-interno">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

    	<div class="ruta">
			<ul>
            	<li><a href="/">Portada</a></li>
                <li><a href="">Acerca del Programa</a></li>
            </ul>
       	</div>
        <div class="titulo"><?php the_title()?></div>
        <div class="columna ancho-960">
        	<?php the_content() ?>
        </div>
            <div class="columna ancho-370 izquierda-40 barra">
	            <?php  get_template_part('banner-curso-virtual'); ?>	
	          	<?php  get_template_part('publicaciones'); ?>	
	          	<?php  get_template_part('tags'); ?>	
	          	<?php  get_template_part('presentacion'); ?>	
	          	<?php  get_template_part('banner-redes-sociales'); ?>
          	</div>
        </div>
	</div>
</div>

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>