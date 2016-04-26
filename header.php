<?php get_template_part('head')?>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<?php do_action('begin_header');?>
				<div id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					<div class="logo-inner">
						<?php do_action('before_logo');?>
						<?php do_action('logo')?>
						<?php do_action('after_logo');?>
					</div>
				</div>

				<nav role="navigation" class="nav-container" itemscope itemtype="http://schema.org/SiteNavigationElement">
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


