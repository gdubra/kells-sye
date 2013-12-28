			<div class="video">
            	<div class="video-arriba">
                	<div class="video-titulo">Video</div>
                    <div class="video-link"><a href="#">Ver m&aacute;s</a></div>
                </div>
                <div class="video-player">
                	<?php $home_video_query = home_video_query();
                	$home_video_query->the_post();
                	$id = get_the_ID();
                	if($id){
	                	$video_id = get_post_meta($id, 'video_id', true);
	                	$fuente = get_post_meta($id, 'fuente', true);
	                	 echo get_video_home_frame($video_id,$fuente);
                	}
                	 ?>
                </div>
              <div class="video-texto"><?php echo the_time('d.m.Y')?><br />
                <a href="<?php echo the_permalink()?>"><?php  echo the_title()?></a></div>
            </div>
