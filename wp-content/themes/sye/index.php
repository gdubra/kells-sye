<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<head>
<?php 
	include_style('flexslider');
	include_script('global');
	include_script('jquery.flexslider-min');
	include_script('index');
?>

</head>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div class="contenido">
			<div class="contenido-interno">
		    	<div class="separador">
		            <div class="destacado">
		                <div class="flexslider">
		                    <ul class="slides">
		                    <?php while ( have_posts() ) : the_post(); ?>
			        	        <li>
		                            <a href="<?php echo the_permalink() ?>">
		                                <?php the_post_thumbnail('post-thumbnails'); ?>
		                                <p class="flex-caption"><span><?php echo the_time('d.m.Y')?></span><br /><?php echo the_title()?></p>
		                            </a>
		                        </li>
		                    <?php endwhile; ?>
		                    </ul>
		                </div>        
		            </div>
		            <?php get_template_part('presentacion')?>
		       </div>
		       <div class="separador espacio-abajo-0">
		       		<div class="blog">
		            	<div class="blog-titulo">Blog y novedades</div>
		                <div class="blog-separador">
		                    <?php $blog_novedades = home_blog_novedades_query() ?>
		                    <?php while ( $blog_novedades->have_posts() ) : $blog_novedades->the_post(); ?>
		                	<div class="blog-nota">
		                    	<div class="blog-nota-imagen">
		                    		<div class="blog-nota-comentarios">
		                    			<div class="blog-nota-comentarios-cantidad">
		                    				<a href="<?php echo the_permalink() ?>"><?php comments_number(); ?> </a>
		                    			</div>
		                    		</div>
		                    		<a href="<?php echo the_permalink() ?>">
		                    			<?php the_post_thumbnail('blog-novedades-home-thum'); ?>
		                    		</a>
		                    	</div>
		                        <div class="blog-nota-arriba">
		                        	<div class="blog-nota-datos">
		                            	<div class="blog-nota-fecha"><?php echo the_time('d.m.Y')?></div>
		                                <div class="blog-nota-autor">Por: <?php the_author_posts_link() ?></div>
		                            </div>
		                            <div class="blog-nota-redes">
		                            	<ul>
		                                	<li class="twitter"><a href="#" title="Publicar en Twitter"></a></li>
		                                    <li class="facebook"><a href="#" title="Publicar en Facebook"></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="blog-nota-titulo"><a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a></div>
		                        <div class="blog-nota-texto"><?php echo the_excerpt() ?></div>
		                    </div>               
		                    <?php endwhile; ?>
						</div>
		            </div>
		       		<div class="programas">
		            	<div class="programas-titulo">Programas a evaluar</div>
		                <div class="programas-paises">
		                	<ul>
		                    	<li class="colombia"><a href="#"><strong>Bogot&aacute;, Colombia</strong>  <br />
		                   	    Camad</a></li>
		                        <li class="el-salvador izquierda-20"><a href="#"><strong>El Salvador  </strong><br />
		                        Granjas Penitenciarias</a></li>
		                    	<li class="chile"><a href="#"><strong>Chile</strong><br />
		                   	    Sistema T&aacute;ctico <br />
		                   	    de  An&aacute;lisis Delictual</a></li>
		                        <li class="honduras izquierda-20"><a href="#"><strong>Honduras</strong><br />
		                        Municipios <br />
		                        mas  Seguros</a></li>
		                    	<li class="argentina"><a href="#"><strong>C&oacute;rdoba, Argentina</strong><br />
		Sistema de Alarmas  Comunitarias</a></li>
		                        <li class="uruguay izquierda-20"><a href="#"><strong>Uruguay  </strong><br />
		                        Gesti&oacute;n Integrada Local<br />
		en Seguridad Ciudadana</a></li>
		                    	<li class="costa-rica"><a href="#"><strong>Costa Rica  </strong><br />
		                   	    Casas de Justicia</a></li>
		                    </ul>
		                </div>
		                <?php get_template_part('banner-curso-virtual')?>
		                <div class="equipos">
		                	<div class="equipos-titulo">Equipos de evaluaci&oacute;n participantes</div>
		                    <div class="equipos-listado">
		                    	<ul><li><a href="#">Instituto de Sociolog&iacute;a de la Universidad Cat&oacute;lica  de Chile, Gesti&oacute;n &amp; Prevenci&oacute;n Consultora y la Corporaci&oacute;n Viviendo de Colombia</a></li>
		                            <li><a href="#">Transcrime/CEAMOS - Joint Research Centre on  Transnational Crime</a></li>
		                            <li><a href="#">Departamento de Estad&iacute;stica de la Universidad  de Concepci&oacute;n </a></li>
		                            <li><a href="#">London &amp;  Econometrica Consulting Group,  M&eacute;xico</a></li>
		                            <li><a href="#">Fundaci&oacute;n Paz Ciudadana de Chile</a></li>
		                            <li><a href="#">Observatorio del Desarrollo de la Universidad  de Costa Rica y University of Cambridge </a></li>
		                            <li><a href="#">School of Economics and Finance Queen Mary,  University of London</a></li>
		                        </ul>
		                    </div>
		                </div>
		         </div>
		       </div>
		       
		       	<div class="columna ancho-960">
		        	<div class="columna ancho-270">
		            	<?php echo get_template_part('publicaciones'); ?>
		                <div class="columna ancho-270 arriba-30"><a href="#"><img src="images/banner-aplicacion.jpg" width="270" height="144" alt="Aplicaci&oacute;n para celulares y tabletas - Pol&iacute;ticas e Intervenciones en Seguridad Ciudadana - Buscando y Evaluando Soluciones a los Problemas" title="Aplicaci&oacute;n para celulares y tabletas - Pol&iacute;ticas e Intervenciones en Seguridad Ciudadana - Buscando y Evaluando Soluciones a los Problemas" /></a></div>
		            </div>
		            
		       	  	<div class="video">
		            	<div class="video-arriba">
		                	<div class="video-titulo">Video</div>
		                    <div class="video-link"><a href="#">Ver m&aacute;s</a></div>
		                </div>
		                <div class="video-player">
		                	<iframe src="//player.vimeo.com/video/61502693?title=0&amp;byline=0&amp;portrait=0&amp;color=37b3af" width="430" height="242" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		                </div>
		              <div class="video-texto">25.10.2013<br />
		                <a href="#">Seminario Internacional sobre Pol&iacute;ticas P&uacute;blicas  de Seguridad.</a></div>
		            </div>
		            
		        	<div class="autoridades">
		            	<ul>
		                	<li class="autoridades-titulo">Coordinador<br />
		               	    t&eacute;cnico</li>
		                	<li class="autoridades-coordinador">Hugo<br />
		               	    Fruhling</li>
		                	<li class="autoridades-titulo">Comit&eacute; asesor</li>
		                	<li>Sebasti&aacute;n<br />
		               	    Galiani</li>
		                	<li>Lawrence<br />
		               	    Sherman</li>
		                	<li>David<br />
		               	    Weisburd</li>
		                	<li>Claudio<br />
		               	    Beato</li>
		                </ul>
		            </div>
		      	</div>    
		       	<?php get_template_part('tags'); ?>
			</div>
		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>