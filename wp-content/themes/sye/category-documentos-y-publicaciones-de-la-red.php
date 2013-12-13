<?php

get_header();
$category =  $wp_query->get_queried_object();
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				<div class="contenido">
	<div class="contenido-interno">
    	<?php get_breadcrumbs() ?>
        <div class="titulo"><?php echo $category->cat_name?></div>
        <div class="columna ancho-960">
        	<div class="interna columna ancho-550 arriba-30">
        	  <h2>En esta secci&oacute;n se encuentran el listado de Documentos de Trabajo, Art&iacute;culos, una Revista &ndash;  Gacetillas,  y otros documentos publicados en el marco o por miembros del Sistema Regional  de Evaluaci&oacute;n.</h2>
        	</div>
            <div class="columna ancho-370 izquierda-40 barra">
				<?php echo get_template_part('banner-aplicacion'); ?>
            </div>
        </div>
        <?php echo get_template_part('publicaciones-y-recursos-subcategorias')?>
	</div>
</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>