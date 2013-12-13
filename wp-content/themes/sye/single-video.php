<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="contenido">
			<div class="contenido-interno">
				<?php get_breadcrumbs() ?>
			<div class="titulo">Galer&iacute;a de videos</div>
			<div class="columna ancho-960">
				<div class="galeria-videos-destacado">
	            	<div class="galeria-videos-destacado-video">
	            		<?php $home_video_query = home_video_query();
                			  $home_video_query->the_post();
                			  echo get_video_destacado_thumb(get_the_content());
                	?>
	            	</div>
	                <div class="galeria-videos-destacado-titulo">
		                <span><?php echo the_time('d.m.Y')?></span><br />
	                     <a href="<?php echo the_permalink()?>"><?php  echo the_title()?></a>
	                </div>
            	</div>
				<div class="columna ancho-550 arriba-30">
	                <div class="columna ancho-270">
	                  <div class="boton-azul"><a href="<?php echo get_post_type_archive_link('video');?>">« Volver a la galería de videos</a></div>
	                </div>
            	</div>
	      </div>
		</div>
	</div>
</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>