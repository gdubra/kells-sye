<?php
/*
Template Name: publicaciones-y-recursos-con-sidebar
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				<div class="contenido">
					<div class="contenido-interno">

						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
			
				    	<?php get_breadcrumbs() ?>
				        <div class="titulo"><?php the_title()?></div>
				        <div class="columna ancho-960">
					        <div class="interna columna ancho-550 arriba-30">
					                <?php the_content() ?>
					         </div>
				            <div class="columna ancho-370 izquierda-40 barra">
								<?php echo get_template_part('banner-aplicacion'); ?>
								<?php echo get_template_part('banner-curso-virtual'); ?>
				                <?php echo get_template_part('publicaciones'); ?>
				                <?php echo get_template_part('tags'); ?>
				                <?php echo get_template_part('presentacion'); ?>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
	</div>

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>