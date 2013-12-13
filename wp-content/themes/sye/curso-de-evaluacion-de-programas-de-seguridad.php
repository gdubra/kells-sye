<?php
/*
Template Name: curso-de-evaluacion-de-programas-de-seguridad
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
            <?php echo get_template_part('banner-titulo-curso-virtual') ?>
            <div class="columna ancho-960 arriba-30">
            	<div class="columna ancho-675 texto-color-gris-claro texto-16">
	            <?php the_content() ?>
	            </div>
	            <?php echo get_template_part('banner-boton-curso-virtual') ?>
            </div>
        </div>
         <div class="curso-modulos">
            	<ul>
                	<li class="primero"><strong>M&oacute;dulo 1</strong><br />
                	  <br />
               	    El primero est&aacute; destinado a los contenidos introductorios en esta tem&aacute;tica, estos son: los fundamentos y objetivos de la  evaluaci&oacute;n de proyectos de prevenci&oacute;n  del delito y la violencia, las condiciones  que deben cumplir los proyectos desde su dise&ntilde;o para una posterior evaluaci&oacute;n y los aspectos generales de la evaluaci&oacute;n de proyectos.                	</li>
                    <li><strong>M&oacute;dulo 2</strong><br />
                      <br />
                    Est&aacute; estructurado en torno a la evaluaci&oacute;n ex ante, intermedia y ex post, las cuales  se presentan junto a ejemplos de  evaluaciones sobre intervenciones  de prevenci&oacute;n.                    </li>
                    <li><strong>M&oacute;dulo 3</strong><br />
                      <br />
                    Se orienta a la conceptualizaci&oacute;n de lo  que se conoce como &ldquo;buenas pr&aacute;cticas&rdquo;  y el proceso de selecci&oacute;n y aprendizaje  que de estas se deriva, dada su utilizaci&oacute;n  e importancia en el &aacute;mbito regional.                    </li>
                </ul>
            </div>
            
        </div>
	</div>
</div>

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>