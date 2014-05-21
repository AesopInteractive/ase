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
	<meta name="p:domain_verify" content="eab589912490f786548fbc933e13b516"/>
	<!-- FB Open Graph -->
	<meta property="fb:app_id" content="492973480802758">
	<meta property="og:url" content="<?php echo get_permalink();?>">
	<meta property="og:title" content="<?php echo get_bloginfo('name');?>">
	<meta property="og:site_name" content="<?php echo get_bloginfo('name');?>">
	<meta property="og:description" content="<?php echo ase_get_social_excerpt();?>">
	<meta property="og:type" content="website">
	<?php echo ase_get_social_backup_img('property','og', 'fb');?>
	<!-- Twitter Meta -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@aesopinteractiv">
	<meta name="twitter:site" content="@aesopinteractiv">
	<meta name="twitter:title" content="<?php echo get_bloginfo('name');?>">
	<meta name="twitter:description" content="<?php echo ase_get_social_excerpt();?>">
	<meta name="twitter:domain" content="<?php echo get_permalink();?>">
	<?php echo ase_get_social_backup_img('name','twitter', 'twitter');?>

	<meta property="og:locale" content="en_us">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/source/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="btn btn-action ase-menu-toggle" href="#">Menu</a>

	<?php

	if ( defined('ASE_DEV')) {
		$acctlink  = sprintf('%s', get_permalink(56));
	} else {
		$acctlink  = sprintf('%s', get_permalink(61));
	}

		if (is_user_logged_in()){
			printf('<a href="%s" class="btn btn-action ase-account-login"><i class="asecon asecon-cog"></i> Account</a>',$acctlink);
		} else {
			printf('<a href="#ase-login" data-toggle="modal" class="btn btn-action ase-account-login"><i class="asecon asecon-key"></i> %s</a>%s',__('Login','ase'),ase_login_modal());
		}
	?>

	<?php do_action('aesop_inside_body_top');?>

	<?php if (!is_front_page()){ ?>
		<a href="<?php echo get_bloginfo('wpurl');?>"><img class="ase-site-logo-tiny" src="<?php echo ASE_URL.'/assets/img/logo.jpg';?>" alt="logo"></a>
	<?php }

	// no header on single stories
	if ( ! ('ase_stories' == get_post_type() && is_single()) ):

	if( !is_home() ){ ?>
	<header id="header" class="ase-site-header">

		<div class="aesop-content">

			<a href="<?php echo get_bloginfo('wpurl');?>"><img class="ase-site-logo" src="<?php echo ASE_URL.'/assets/img/logo.jpg';?>" alt="logo"></a>

			<?php if(is_front_page()) {?>
				<h2 class="ase-site-title">Write stories instead of code</h2>
				<p class="ase-sub-title"><span class="ase-italic ase-bold">Aesop Story Engine</span> is a collection of thirteen unique components wrapped in a plugin that can be used to tell rich, interactive stories in (almost) any WordPress theme.</p>
				<?php get_template_part('partials/red-btn');?>
				<ul class="unstyled ase-social-links">
					<li class="ase-nav-social"><a href="http://twitter.com/aesopinteractiv"><i class="asecon asecon-twitter-square"></i></a></li>
					<li class="ase-nav-social"><a href="http://facebook.com/aesopinteractive"><i class="asecon asecon-facebook-square"></i></a></li>
					<li class="ase-nav-social"><a href="https://plus.google.com/+Aesopstoryengine/"><i class="asecon asecon-google-plus-square"></i></a></li>
					<li class="ase-nav-social"><a href="http://www.pinterest.com/aesopinteractiv/"><i class="asecon asecon-pinterest-square"></i></a></li>
				</ul>
				<p class="ase-site-sub-title-more">Check out the <a href="http://playground.aesopstories.com">demo</a>. Our site is also proudly built with <span class="ase-bold">Aesop Story Engine</span>.</p>
			<?php } elseif ('download' == get_post_type()) {?>
				<h2 class="ase-page-title">Library</h2>
				<p class="ase-sub-title"><span class="ase-bold">Enhance your story experience</span>, by leveraging the power <br />  of themes and add-ons built specifically for Aesop Story Engine.</p>
			<?php } elseif ('ase_showcase' == get_post_type()){?>
				<h2 class="ase-page-title">Showcase</h2>
			<?php } elseif (is_home()) {?>
				<h2 class="ase-page-title">Blog</h2>
				<p class="ase-sub-title"><span class="ase-bold">Tips, tricks, tutorials</span>, and original <br />  hand-crafted stories using Aesop Story Engine.</p>
			<?php } elseif (is_single()) {?>
				<h2 class="ase-page-title"><?php the_title();?></h2>

				<?php

	                $author_id = get_queried_object()->post_author;
    				$name = get_the_author_meta('display_name', $author_id);
    				if(!is_bbpress())
	                printf('<p class="ase-sub-title">By <strong>%s</strong> on %s</p>',$name, get_the_date());

			} else { ?>
				<h2 class="ase-page-title"><?php the_title();?></h2>
				<?php

				$page_subtitle = get_post_meta(get_the_ID(), 'ase_page_excerpt', true);

				if ($page_subtitle){ ?>
					<div class="ase-sub-title">
						<?php
						echo wpautop($page_subtitle);
						?>
					</div>
				<?php } ?>

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


		<nav class="ase-primary-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'ase-nav-menu unstyled' ) ); ?>
		</nav>

	<?php endif; ?>

	<main id="main-content" class="main-content clearfix">