<?php
get_header(); ?>

<div class="contenido">
	<div class="contenido-interno">
    	<div class="ruta">
			<ul>
            	<li><a href="">Portada</a></li>
            </ul>
       	</div>
        <div class="titulo">Blog y Novedades</div>
        <div class="columna ancho-960">
        	<div class="interna columna ancho-550 arriba-30">
        		<?php $count = 0; while ( have_posts() ) : the_post(); ?>
 						<?php if ($count %2  == 0 ) {?> 
 						<div class="blog-separador">
	                	<div class="blog-nota">
		                    	<div class="blog-nota-imagen">
		                    		<div class="blog-nota-comentarios">
		                    			<div class="blog-nota-comentarios-cantidad">
		                    				<a href="<?php echo the_permalink() ?>"><?php comments_number(0,'%','%'); ?> </a>
		                    			</div>
		                    		</div>
		                    		<a href="<?php echo the_permalink('blog-novedades-home-thum') ?>">
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
		                                	<li class="twitter"><a href="http://www.twitter.com/share?url=<?php echo urlencode(get_permalink()) ?>" title="Publicar en Twitter" target="_blank"></a></li>
		                                	<li class="facebook"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>" title="Publicar en Facebook" target="_blank"></a></li>
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="blog-nota-titulo"><a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a></div>
		                        <div class="blog-nota-texto"><?php echo the_excerpt() ?></div>
		                    </div>               
                 <?php } else {?> 
					<div class="blog-nota izquierda-30">
		                    	<div class="blog-nota-imagen">
		                    		<div class="blog-nota-comentarios">
		                    			<div class="blog-nota-comentarios-cantidad">
		                    				<a href="<?php echo the_permalink() ?>"><?php comments_number(0,'%','%'); ?> </a>
		                    			</div>
		                    		</div>
		                    		<a href="<?php echo the_permalink('blog-novedades-home-thum') ?>">
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
                </div>
                    <?php }  $count++;?>
                   
                <?php endwhile; ?>
 
                <?php include('includes/paginador.php'); ?>                            
            </div>
            <div class="columna ancho-370 izquierda-40 barra">
            	<div class="blog-autores-titulo">Participantes</div>
				<div class="blog-autores">
    				<ul>
    					<?php contributors(); ?>
    				</ul>
				</div>
				<?php echo get_template_part('banner-curso-virtual'); ?>
				<?php echo get_template_part('publicaciones'); ?>
				<?php echo get_template_part('tags'); ?>
            </div>
        </div>
	</div>
</div>