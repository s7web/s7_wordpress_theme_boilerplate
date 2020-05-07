<?php
/**
 * Template : Header
 *
 * @package S7design
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<!--=== META TAGS ===-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="author" content="Name">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--=== LINK TAGS ===-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--=== TITLE ===-->
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '-' ); ?> </title>

	<!--=== WP_HEAD() ===-->
	<?php wp_head(); ?>
</head>
<body>
<header>
	<nav>
		<div class="nav-wrapper container">
		<?php 
		$logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'thumbnail' );
		if($logo) { 
		?>

			<a href="#!" class="brand-logo" style="top:7px;">
			<img style="height:50px;" src="<?php  echo $logo[0]; ?>"> 
			</a>
		<?php } ?>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

		<?php
		wp_nav_menu( array(
		'theme_location' => 'top-menu-global-page',
		'menu_id'        => 'main-menu',
		'menu_class'        => 'right hide-on-med-and-down',
		) );
		?>
		
		</div>
	</nav>
	<?php 
/*  SHOW ON MOBILE RESOLUTION */
   wp_nav_menu( array(
	'theme_location' => 'top-menu-global-page',
	'menu_id'        => 'mobile-demo',
	'menu_class'        => 'sidenav',
	) );
	?>
</header>



 
 <div class="main">