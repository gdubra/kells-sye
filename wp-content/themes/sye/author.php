<?php
get_header(); 
?>
<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="contenido">
	<div class="contenido-interno">
    	<?php get_breadcrumbs() ?>
        <div class="titulo">Autor: <?php echo get_the_author_meta("display_name", $curauth->ID); ?></div>
        <div class="columna ancho-960">
        	<div class="interna columna ancho-550 arriba-30">
	    		<!--h2>Autor: <?php echo get_avatar($curauth->ID, 61,the_author_meta('display_name', $curauth->ID)); ?></h2>
    			<dl>
			        <dt>Profesión</dt>
			        <dd><?php echo get_the_author_meta("profesion", $curauth->ID); ?></dd>
			    </dl-->
    				
        		<?php
        			$counter = 1; 
        		     while ( have_posts() ) : the_post(); ?>
 					<?php if ($counter % 2  != 0 ) {?> 
 						<div class="blog-separador">
	                		<div class="blog-nota">
		                    		<?php include('includes/nota.php'); ?>  
		                	</div>
                 <?php  } else {?> 
							<div class="blog-nota izquierda-30">
		                		<?php include('includes/nota.php'); ?>
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
<?php get_footer(); ?>