<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
         <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
         <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade 
            your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve 
            your experience.</p>
        <![endif]-->
<div id="home"></div>        
        
<nav>
	<ul class="unstyled inline nav">
		<?php if (is_front_page()) { ?>
		<li><a href="#home"><span aria-hidden="true" class="icon-home"></span></a></li>
		<li><a href="#work">work</a></li>
		<li><a href="#resume">resume</a></li>
		<li><a href="#contact">contact</a></li>
		<?php } ?>
		<?php if (is_front_page()) { } else { ?>
		<li><a href="http://nuferdan.com"><span aria-hidden="true" class="icon-home"></span></a></li>
		<li><a href="http://nuferdan.com#work">work</a></li>
		<li><a href="http://nuferdan.com#resume">resume</a></li>
		<li><a href="http://nuferdan.com#contact">contact</a></li>
		<?php } ?>
	</ul>
	<a id="menu" href= "#sidr"><span aria-hidden="true" class="icon-menu"></a>	
</nav>

<!-- MOBILE NAV -->

<div id="sidr">
	<ul class="unstyled">
		<?php if (is_front_page()) { ?>
		<li><a href="#home"><span aria-hidden="true" class="icon-home"></span></a></li>
		<li><a href="#work">work</a></li>
		<li><a href="#resume">resume</a></li>
		<li><a href="#contact">contact</a></li>
		<?php } ?>
		<?php if (is_front_page()) { } else { ?>
		<li><a href="http://nuferdan.com"><span aria-hidden="true" class="icon-home"></span></a></li>
		<li><a href="http://nuferdan.com#work">work</a></li>
		<li><a href="http://nuferdan.com#resume">resume</a></li>
		<li><a href="http://nuferdan.com#contact">contact</a></li>
		<?php } ?>
	</ul>
</div>

<section id="hero" data-type="background" data-speed="10">
	<div id="video">
	</div>
	<h1>DanNufer</h1>
	<ul class="unstyled inline">
		<li>UI Architect</li>
		<li>Content Strategist</li>
		<li>Accessibility Evangelist</li>
	</ul>
</section>
