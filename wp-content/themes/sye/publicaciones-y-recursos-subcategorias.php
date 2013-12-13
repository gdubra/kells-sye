<?php 
        $category =  $wp_query->get_queried_object();
        $subcategorias = get_categories( array('child_of'=>$category->cat_ID,'hide_empty'=>0) );
        foreach ($subcategorias as $subcategoria):
        	$subcategoria_nombre = $subcategoria->cat_name;
        ?>
        <div class="columna ancho-960 arriba-30">
        	<div class="blog-titulo espacio-abajo-10"><?php echo $subcategoria_nombre?></div>
            <div class="subseccion-caja">
                	
                	<?php $query = subcategoria_documentos_y_publicaciones_de_la_red_query($subcategoria_nombre);?>
                	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                	<div class="blog-nota izquierda-20">
                    	<div class="blog-nota-imagen">
                    		<div class="blog-nota-comentarios">
                    			<div class="blog-nota-comentarios-cantidad">
                    				<a href="<?php echo the_permalink() ?>"><?php comments_number(0,'1','% '); ?></a>
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
                                	<li class="twitter"><a href="http://www.twitter.com/share?url=<?php echo urlencode(get_permalink()) ?>" target="_blank" title="Publicar en Twitter"></a></li>
                                    <li class="facebook"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>" target="_blank" title="Publicar en Facebook"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-nota-titulo"><a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a></div>
                        <div class="blog-nota-texto"><?php echo the_excerpt() ?></div>
                    </div>   
                    <?php endwhile; ?>            
                    <div class="subseccion-caja-mas"><a href="<?php echo get_category_url($subcategoria_nombre)?>">Ver<br />m&aacute;s<br /><strong>+</strong></a></div>
                     
            </div>
        </div>
        <?php endforeach;?>
