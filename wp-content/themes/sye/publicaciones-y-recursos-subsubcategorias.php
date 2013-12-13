<?php
get_header(); 

?>

<?php 
        $category =  $wp_query->get_queried_object();
        
        ?>

<div class="contenido">
	<div class="contenido-interno">
    	<div class="ruta">
			<?php get_breadcrumbs() ?>
        </div>
        <div class="titulo"><?php echo $category->cat_name ?></div>
        <div class="columna ancho-960">
        	<div class="interna columna ancho-550 arriba-30">
        		<?php
        			$counter = 1; 
        		     while ( have_posts() ) : the_post(); ?>
 					<?php if ($counter % 2  != 0 ) {?> 
 						<div class="blog-separador">
	                		<div class="blog-nota">
		                    		<?php include('includes/nota-publicaciones-y-recursos.php'); ?>  
		                	</div>
                 <?php  } else {?> 
							<div class="blog-nota izquierda-30">
		                		<?php include('includes/nota-publicaciones-y-recursos.php'); ?>
                			</div>
                		</div>
                    <?php }; $counter++;?>
                   
                <?php endwhile; ?>
 
 				<?php if ($counter % 2  == 0 ) {?> 
 					</div>
 				<?php }; ?>
                <?php include('includes/paginador.php'); ?>                            
            </div>
            <div class="columna ancho-370 izquierda-40 barra">
				<?php echo get_template_part('banner-curso-virtual'); ?>
				<?php echo get_template_part('publicaciones'); ?>
				<?php echo get_template_part('tags-publicaciones-y-recursos'); ?>
            </div>
        </div>
	</div>
</div>
