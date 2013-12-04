<?php
/*
Template Name: publicaciones-y-recursos
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
			                <li><a href="">Publicaciones y Recursos</a></li>
			            </ul>
			       	</div>
			        <div class="titulo"><?php the_title()?></div>
			                <?php the_content() ?>
				    </div>
				</div>
			</div>
	</div>

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>