
<div class="blog-nota-imagen">
	<div class="blog-nota-comentarios">
		<div class="blog-nota-comentarios-cantidad">
			<a href="<?php echo the_permalink() ?>"><?php comments_number(0,'1 ','% '); ?></a>
		</div>
	</div>
	<a href="<?php echo the_permalink('blog-novedades-home-thum') ?>"> <?php the_post_thumbnail('blog-novedades-home-thum'); ?></a>
</div>
<div class="blog-nota-arriba">
	<div class="blog-nota-datos">
		<div class="blog-nota-fecha"><?php echo the_time('d.m.Y')?></div>
		<div class="blog-nota-autor">Por: <?php the_author_posts_link() ?></div>
	</div>
	<div class="blog-nota-redes">
			<ul>
				<li class="twitter">
					<a href="http://www.twitter.com/share?url=<?php echo urlencode(get_permalink()) ?>"
					title="Publicar en Twitter" target="_blank"></a>
				</li>
				<li class="facebook">
					<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>"
					title="Publicar en Facebook" target="_blank"></a>
				</li>
			</ul>
	</div>
</div>
	<div class="blog-nota-seccion"><a href="#"><?php $categories = get_the_category(); echo $categories[1]->cat_name; 
			?></a></div>

<div class="blog-nota-titulo"><a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a></div>
<div class="blog-nota-texto"><?php echo the_excerpt() ?></div>
<div class="blog-nota-tags">
<?php 
					                	$posttags = get_the_tags();
										if ($posttags) {
										  foreach($posttags as $tag) {
										    echo "<a href=\"".get_tag_link($tag->term_id)."\">".$tag->name."</a>  / "; 
										  }
										}
							
										?>
</div>