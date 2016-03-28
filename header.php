<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(''); ?></title>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="theme-color" content="#121212">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<?php do_action('begin_header');?>
				<div id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					<div class="logo-inner">
						<?php do_action('before_logo');?>
						<a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>
						<?php do_action('after_logo');?>
					</div>
				</div>

				<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<div class="nav-inner">
						<?php wp_nav_menu(array(
							'container' => false,                           // remove nav container
							'container_class' => 'menu',                 // class of container (should you choose to use it)
							'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
							'menu_class' => 'nav top-nav',               // adding custom nav class
							'theme_location' => 'main-nav',                 // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</div>
				</nav>
				<?php do_action('end_header');?>
			</header>


