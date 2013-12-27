<?php $tags = get_tags(array('hide_empty'=>true)); ?>
<div class="tags">
    <div class="tags-titulo"><span>Tags de informaci&oacute;n</span></div>
    <div class="tags-listado">
      <ul>
            <?php foreach ($tags as $tag):?>
            <li>
				<a href='?tag=<?php echo $tag->slug ?>' title='<?php echo $tag->name?>'><?php echo $tag->name?></a>
			</li>
            <?php  endforeach;?>
        </ul>
    </div>
</div>
