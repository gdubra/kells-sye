<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="contenido">
		<div class="contenido-interno">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
    					<div class="ruta">
							<ul>
				            	<li><a href="">Portada</a></li>
				                <li><a href="">Blog y Novedades</a></li>
				            </ul>
				       	</div>
        				<div class="titulo">Artículo</div>
        				<div class="columna ancho-960">
        					<div class="interna columna ancho-550 arriba-30 blog-nota-interna">
				            	<div class="blog-nota-interna-arriba">
				                	<div class="blog-nota-interna-fecha"><?php echo the_time('d.m.Y')?></div>
				                    <div class="blog-nota-interna-autor">Por: <span><?php the_author_posts_link() ?></span></div>
				                    <div class="blog-nota-interna-comentarios">
				                    	<div class="blog-nota-interna-comentarios-cantidad">
					                    	<a href="<?php echo the_permalink() ?>"><?php comments_number(0, 1, '% '); ?> </a>
				                    	</div>
				                    </div>
				                </div>
				            	<h1><?php the_title(); ?></h1>
				                <h2><?php the_excerpt();?></h2>
				              	<div class="blog-nota-interna-medio">
					                <div class="blog-nota-interna-tags">
					                	<?php 
					                	$posttags = get_the_tags();
										if ($posttags) {
										  foreach($posttags as $tag) {
										    echo "<a href=\"".get_tag_link($tag->term_id)."\">".$tag->name."</a>  / "; 
										  }
										}
							
										?>
										<?php include('includes/share.php'); ?>
					              	</div>
				            	</div>
				                <div class="blog-nota-interna-texto">
				                  	<?php the_content(); ?>
				                </div>
				            </div>
				            <div class="columna ancho-370 izquierda-40 barra">
				            	<?php echo get_template_part('banner-curso-virtual'); ?>
								<?php echo get_template_part('publicaciones'); ?>
				            	<?php include('includes/presentacion.php'); ?>
				            </div>
        				</div>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>