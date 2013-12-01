<?php $tags = get_tags(); ?>
<div class="tags">
    <div class="tags-titulo"><span>Tags de informaci&oacute;n</span></div>
    <div class="tags-listado">
      <ul>
            <?php foreach ($tags as $tag):?>
            <li>
				<a href='<?php echo get_tag_link( $tag->term_id ); ?>' title='<?php echo $tag->name?>'><?php echo $tag->name?></a>
			</li>
            <?php  endforeach;?>
        </ul>
    </div>
</div>
