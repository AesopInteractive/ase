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
	<link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/source/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('aesop_inside_body_top');?>

	<header id="header" class="ase-site-header">

		<img class="ase-site-logo" src="http://placekitten.com/100/100" alt="logo">

		<h2 class="ase-site-title">Write stories instead of code.</h2>
		<p class="ase-sub-title">With an easy-to-use set of tools that help you tell rich, interactive stories using an open-source WordPress plugin.</p>

		<a href="http://wordpress.org/plugins/aesop-story-engine/" class="btn btn-ase-download">
			<span class="ase-dl-btn-top">Download Aesop Story Engine</span>
			<span class="ase-dl-btn-top">and start telling stories with wordpress</span>
		</a>

		<?php echo do_shortcode('[aesop_gallery id="53"]');?>

	</header>


	<?php if (is_front_page()) {?>
		<nav class="ase-primary-nav aesop-timeline"></nav>
	<?php } else { ?>
		<nav class="ase-primary-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'ase-nav-menu unstyled' ) ); ?>
		</nav>
	<?php } ?>