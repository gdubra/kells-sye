<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Condensed:400,700|Roboto:400,700,700italic">
	<?php wp_head(); ?>
</head>

<body>
	<div id="page" class="hfeed site">
		<header >
			<div>
			<?php
$arrMesesCompl 	= array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
?>
<div class="encabezado-barra">
	<div class="encabezado-barra-interno">
		<div class="encabezado-fecha"><?=ucfirst(strtolower($arrDiasCompl[date("w")]))?> <?=date("j")?> de <?=ucfirst(strtolower($arrMesesCompl[ceil(date("m"))]))?> de <?=date("Y")?></div>
        <div class="encabezado-idioma"><a href="#">English</a></div>
      <div class="encabezado-redes">
      	<ul>
        	<li><a href="#" title="Facebook">&nbsp;</a></li>
            <li class="twitter"><a href="#" title="Twitter">&nbsp;</a></li>
            <li class="linkedin"><a href="#" title="LinkedIn">&nbsp;</a></li>
            <li class="youtube"><a href="#" title="YouTube">&nbsp;</a></li>
        </ul>
      </div>
      <div class="encabezado-buscador">
      	<form>
        	<input name="buscador" type="text" />
        </form>
      </div>
      <div class="encabezado-contacto"><a href="contacto.php">Contacto</a></div>
  </div>
</div>
<div class="encabezado">
  <div class="encabezado-interno">
    <div class="encabezado-logo"><a href="<?php echo get_home_url()?>"></a></div>
    <div class="encabezado-logos"><a href="http://www.unvm.edu.ar/" class="unvm_logo" target="_blank"></a></div>
    <div class="encabezado-logos"><a href="http://www.iadb.org/es" class="iadb_logo" target="_blank" alt="BID - Banco Interamericano de Desarrollo" title="BID - Banco Interamericano de Desarrollo" /></a></div>
  </div>
</div>
<div class="menu">
  <div class="menu-interno">
    <ul>
      <li class="menu-1"><a href="#">Acerca del programa </a>
        <ul>
          <li><a href="#">Objetivos y Alcance</a></li>
          <li><a href="#">Estructura organizacional</a></li>
          <li><a href="#">Centros de Investigaci&oacute;n Participantes</a></li>
          <li><a href="#">Otros Gobiernos e Instituciones Adherentes</a></li>
          <li><a href="#">Anuncios y Agenda</a></li>
        </ul>
      </li>
      <li class="menu-2"><a href="#">Evaluaciones de impacto del programa</a>
        <ul>
          <li><a href="#">Programas a evaluar</a></li>
          <li><a href="#">Dise&ntilde;o</a></li>
          <li><a href="#">Resultados</a></li>
        </ul>
      </li>
      <li class="menu-3"><a href="#">Blog y novedades</a></li>
      <li class="menu-4"><a href="#">Publicaciones y recursos</a>
        <ul>
          <li><a href="#">Curso de Evaluaci&oacute;n de Programas en Seguridad</a></li>
          <li><a href="#">Aplicaci&oacute;n para B&uacute;squeda de Pol&iacute;ticas y Evaluaciones</a></li>
          <li><a href="#">Documentos y Publicaciones de la Red</a></li>
          <li><a href="#">Material de Capacitaci&oacute;n y Presentaciones</a></li>
          <li><a href="#">Otras publicaciones</a></li>
          <li><a href="#">Galer&iacute;a de videos</a></li>
          <li><a href="#">Galer&iacute;a de fotos</a></li>
          <li><a href="#">Instituciones y Enlaces Relevantes</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
