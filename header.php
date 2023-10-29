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
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Facebook Image -->
	<link rel="image_src" href="" />
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/icon.ico" />
<!-- Facebook Image -->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>
    <header class="flex flex-row bg-white flex-1 w-full h-40 justify-between items-center py-6 px-10 bg-[url('<?php bloginfo('template_directory')?>/img/bgtexture.jpg'] bg-cover">  
          <img src="<?php bloginfo('template_directory')?>/img/logo-cultivo-patagonia.png" alt="Cultivo Patagonia">
          <div class="rss flex flex-row items-center justify-center">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 28.3333C22.8115 28.3333 28.3334 22.8115 28.3334 16C28.3334 9.18832 22.8115 3.66666 16 3.66666C9.18835 3.66666 3.66669 9.18832 3.66669 16C3.66669 22.8115 9.18835 28.3333 16 28.3333ZM16 28.3333V18M16 18V13.3333C16 11.4923 17.4924 9.99999 19.3334 9.99999H21M16 18H12.3334M16 18H19.6667" stroke="black" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_4_17)">
            <path d="M16 0C7.1625 0 0 7.1625 0 16C0 24.8375 7.1625 32 16 32C24.8375 32 32 24.8375 32 16C32 7.1625 24.8375 0 16 0ZM25.9875 25.9813C24.6875 27.2812 23.1812 28.3 21.5 29.0062C19.7625 29.7437 17.9125 30.1125 16 30.1125C14.0938 30.1125 12.2437 29.7375 10.5 29.0062C8.81875 28.2937 7.30625 27.275 6.0125 25.9813C4.7125 24.6813 3.69375 23.175 2.9875 21.4937C2.25 19.7563 1.875 17.9062 1.875 16C1.875 14.0938 2.25 12.2437 2.98125 10.5C3.69375 8.81875 4.7125 7.30625 6.00625 6.0125C7.3125 4.7125 8.81875 3.69375 10.5 2.98125C12.2437 2.25 14.0938 1.875 16 1.875C17.9062 1.875 19.7563 2.25 21.5 2.98125C23.1812 3.69375 24.6937 4.7125 25.9875 6.00625C27.2875 7.30625 28.3063 8.8125 29.0125 10.4937C29.75 12.2312 30.1187 14.0812 30.1187 15.9937C30.1187 17.9 29.7438 19.75 29.0125 21.4937C28.3 23.175 27.2812 24.6875 25.9875 25.9813Z" fill="black"/>
            <path d="M20.9125 8H11.1C9.39373 8 8.00623 9.3875 8.00623 11.0938V14.3625V20.9125C8.00623 22.6188 9.39373 24.0062 11.1 24.0062H20.9125C22.6187 24.0062 24.0062 22.6188 24.0062 20.9125V14.3563V11.0875C24 9.3875 22.6125 8 20.9125 8ZM21.8 9.84375H22.1562V10.1938V12.5562L19.45 12.5625L19.4437 9.85L21.8 9.84375ZM13.7187 14.3563C14.2312 13.65 15.0625 13.1812 16 13.1812C16.9375 13.1812 17.7687 13.6438 18.2812 14.3563C18.6187 14.8188 18.8125 15.3875 18.8125 16C18.8125 17.55 17.55 18.8188 15.9937 18.8188C14.4375 18.8188 13.1875 17.55 13.1875 16C13.1875 15.3875 13.3875 14.8188 13.7187 14.3563ZM22.4437 20.9062C22.4437 21.75 21.7562 22.4375 20.9125 22.4375H11.1C10.2562 22.4375 9.56873 21.75 9.56873 20.9062V14.3563H11.9562C11.75 14.8625 11.6312 15.4187 11.6312 16C11.6312 18.4125 13.5937 20.375 16.0062 20.375C18.4187 20.375 20.3812 18.4125 20.3812 16C20.3812 15.4187 20.2625 14.8625 20.0562 14.3563H22.4437V20.9062Z" fill="black"/>
            </g>
            <defs>
            <clipPath id="clip0_4_17">
            <rect width="32" height="32" fill="white"/>
            </clipPath>
            </defs>
            </svg>
          </div>
    </header>

    <nav class="bg-amber-100 py-4 px-10 flex flex-row items-center justify-center">
            <?php wp_nav_menu( array('menu' => 'mainmenu' )); ?>
    </nav>
