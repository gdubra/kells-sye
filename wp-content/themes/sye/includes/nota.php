<script src="//connect.facebook.net/en_US/all.js"></script>
<?php include_script('facebook_util');?>

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
		<?php if (get_the_author() != 'admin' ) {?>
		<div class="blog-nota-autor">Por: <?php the_author_posts_link() ?></div>
		<?php }?>
	</div>
	<div class="blog-nota-redes">
		<ul>
			<li class="twitter">
				<a href="http://www.twitter.com/share?url=<?php echo urlencode(get_permalink()) ?>&text=<?php echo the_title() ?>"
				title="Publicar en Twitter" target="_blank"></a>
			</li>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) )?>
		                                    <li class="facebook"><a onclick="share_facebook('<?php echo get_permalink() ?>','<?php echo $image[0] ?>','<?php echo the_title()?>','<?php echo get_the_excerpt()?>' )" title="Publicar en Facebook"></a></li>
		</ul>
	</div>
</div>
<div class="blog-nota-titulo"><a href="<?php echo the_permalink() ?>"><?php echo the_title()?></a></div>
<div class="blog-nota-texto"><?php echo the_excerpt() ?></div>
