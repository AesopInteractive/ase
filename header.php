<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/source/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('aesop_inside_body_top');?>

	<div class="ase-sticky-nav">
		<a href="<?php echo get_bloginfo('wpurl');?>"><img class="ase-site-logo" src="<?php echo ASE_URL.'/assets/img/logo.jpg';?>" alt="logo"></a>
		<?php if (is_front_page()) {?>
			<div class="ase-sticky-nav-menu aesop-timeline collapse"></div>
			<a class="ase-sticky-toggle-menu" data-toggle="collapse" data-target=".ase-sticky-nav-menu">Menu</a>
		<?php } else { ?>
			<nav class="ase-sticky-nav-menu collapse">
				<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'ase-sticky-menu unstyled' ) ); ?>
			</nav>
			<a class="ase-sticky-toggle-menu" data-toggle="collapse" data-target=".ase-sticky-nav-menu">Menu</a>
		<?php } ?>
	</div>

	<?php if(!is_home()){ ?>
	<header id="header" class="ase-site-header">

		<div class="aesop-content">

			<a href="<?php echo get_bloginfo('wpurl');?>"><img class="ase-site-logo" src="<?php echo ASE_URL.'/assets/img/logo.jpg';?>" alt="logo"></a>

			<?php if(is_front_page()) {?>
				<h2 class="ase-site-title">Write stories instead of code</h2>
				<p class="ase-sub-title"><span class="ase-italic ase-bold">Aesop Story Engine</span> is a collection of thirteen unique components wrapped in a plugin that can be used to tell rich, interactive stories in (almost) any WordPress theme.</p>
				<?php get_template_part('partials/red-btn');?>
				<p class="ase-site-sub-title-more">Looking for a demo? Our site is proudly built with <span class="ase-bold">Aesop Story Engine</span>.</p>
			<?php } elseif ('download' == get_post_type()) {?>
				<h2 class="ase-page-title">Library</h2>
				<p class="ase-sub-title"><span class="ase-bold">Enhance your story experience</span>, by leveraging the power <br />  of themes and add-ons built specifically for Aesop Story Engine.</p>
			<?php } elseif (is_home()) {?>
				<h2 class="ase-page-title">Blog</h2>
				<p class="ase-sub-title"><span class="ase-bold">Tips, tricks, tutorials</span>, and original <br />  hand-crafted stories using Aesop Story Engine.</p>
			<?php } elseif (is_single()) {?>
				<h2 class="ase-page-title"><?php the_title();?></h2>
				<?php

	                $author_id = get_queried_object()->post_author;
    				$name = get_the_author_meta('display_name', $author_id);

	                printf('<p class="ase-sub-title">By <strong>%s</strong> on %s</p>',$name, get_the_date());

			} else {?>
				<h2 class="ase-page-title"><?php the_title();?></h2>
			<?php } ?>

		</div>

		<?php if (!is_single()){?>
			<div class="ase-header-show cycle-slideshow" data-cycle-slides="> div" data-cycle-log="false" data-cycle-fx="fadeOut" data-cycle-pause-on-hover="true" data-cycle-speed="200" data-cycle-timeout="15000">
				<div style="background:url(<?php echo ASE_URL.'/assets/img/ss/04.jpg';?>);background-size:cover;background-position:center center;"></div>
				<div style="background:url(<?php echo ASE_URL.'/assets/img/ss/02.jpg';?>);background-size:cover;background-position:center center;"></div>
				<div style="background:url(<?php echo ASE_URL.'/assets/img/ss/03.jpg';?>);background-size:cover;background-position:center center;"></div>
				<div style="background:url(<?php echo ASE_URL.'/assets/img/ss/06.jpg';?>);background-size:cover;background-position:center center;"></div>
				<div style="background:url(<?php echo ASE_URL.'/assets/img/ss/05.jpg';?>);background-size:cover;background-position:center center;"></div>
				<div style="background:url(<?php echo ASE_URL.'/assets/img/ss/01.jpg';?>);background-size:cover;background-position:center center;"></div>
			</div>
		<?php } else {

			?>
			<div class="ase-header-show">
				<div class="ase-header-single-show" style="background:url(<?php echo ASE_URL.'/assets/img/ss/01.jpg';?>);background-size:cover;background-position:center center;"></div>
			</div>
		<?php } ?>

	</header>
	<?php } ?>


	<?php if (is_front_page()) {?>
		<div class="ase-primary-nav aesop-timeline"></div>
	<?php } elseif (!is_home()) { ?>
		<nav class="ase-primary-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'ase-nav-menu unstyled' ) ); ?>
		</nav>
	<?php } ?>

	<main id="main-content" class="main-content clearfix">