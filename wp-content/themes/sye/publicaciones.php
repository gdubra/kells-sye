<?php $query = home_publicacion_recursos_query() ?>
<?php $query->the_post() ?>
<div class="publicaciones">
    <div class="publicaciones-titulo">Publicaciones y recursos</div>
    <div class="publicaciones-texto"><?php echo the_time('d.m.Y')?><br /><a href="<?php echo the_permalink()?>"><?php echo the_title() ?></a></div>
    <div class="publicaciones-boton boton-azul"><a href="<?php echo get_category_url(CATEGORIA_PUBLICACIONES_RECURSOS)?>" class="texto-10">Ver m&aacute;s publicaciones y recursos</a></div>
</div>
