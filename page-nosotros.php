<?php
/*
Template Name: Nosotros
*/
?>

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Meta Information -->
	<meta name="google-site-verification" content="">
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2013. All Rights Reserved.">
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
<!-- Stylesheets -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
<!-- Facebook Image -->
	<link rel="image_src" href="" />
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/icon.ico" />
<!-- Facebook Image -->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>

    <header>
        <div class="row full collapse">
            <div class="large-12 medium-12 small-12 columns">

                <div id="menu">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name">
                                <h1><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_refugio.png" alt=""></a></h1>
                            </li>
                            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                        </ul>
                        <section class="top-bar-section">
                            <!-- Right Nav Section -->
                            <?php wp_nav_menu( array('menu' => 'productos','menu_class' => 'right', )); ?>
                        </section>
                    </nav>
                </div>

                <span class="degradado"></span>

                <div class="contenedor_img">
                        <li>
                          <?php the_post_thumbnail('insidebig');?>
                          <!-- <img src="<?php bloginfo('template_directory'); ?>/img/slider_001.jpg" alt=""> -->
                        </li>
                </div>
            </div>
        </div>
    </header>

  <section>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row full" id="contenedor_nosotros">
            <div class="large-6 medium-8 small-12 columns large-centered medium-centered">
               
                <div class="texto text-center">
                    <div class="titulo">
                        <h1><span> nosotros</span><br> arrayanes</h1>
                    </div>

                    <?php the_content();?>
                </div>
            </div>
        </div>


        <div class="row full collapse" id="mapa">
            <div class="large-12 medium-12 small-12 columns contenedor_ubicacion">

                <div class="large-6 medium-8 small-12 columns text-center large-centered medium-centered">
                    <div class="texto">

                        <div class="titulo">
                            <h1><span> refugio </span><br> campestre</h1>
                        </div>

                        <p>Localidad en punto de intersección de Cogomó y Choroihué, a 27 kms al sur de Ancud y a 70 kms de Castro; a 33 kms del futuro puente de Chacao.</p>
                    </div>
                </div>
            </div>

            <div class="large-12 medium-12 small-12 columns">
                <div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.088479194741!2d-73.83003874876123!3d-41.86944277912095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96228dfe9a09e777%3A0xbffff2a3a9d628cd!2sLos%20Ulmos%20Propiedades!5e0!3m2!1ses!2scl!4v1637674387507!5m2!1ses!2scl' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>