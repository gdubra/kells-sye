<script src="//connect.facebook.net/en_US/all.js"></script>
<?php include_script('facebook_util');?>
<div class="compartir">
	<div class="addthis_toolbox addthis_default_style">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) )?>
		                                    <a title="Publicar en Facebook"></a>
		<a  class="addthis_button_facebook"
			 onclick="share_facebook('<?php echo get_permalink() ?>','<?php echo $image[0] ?>','<?php echo the_title()?>','<?php echo get_the_excerpt()?>' )"></a>
		<a class="addthis_button_twitter" href="http://www.twitter.com/share?url=<?php echo urlencode(get_permalink($the_post->ID)); ?>&text=<?php echo the_title() ?>"></a> 
		<a class="addthis_button_print" href="javascript:window.print()"></a>
		<a class="addthis_button_email"></a>
	</div>
	<script type="text/javascript"
		src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5259e6b615f6ae4a"></script>
</div>