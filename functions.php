<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once( 'library/bones.php' );
require_once( 'library/theme-options.php' );

add_action('logo', 'sic_logo');

	if(!function_exists('sic_logo')){
		function sic_logo(){
			echo '<a href="'  . home_url() . '" rel="nofollow">' . get_bloginfo('name') . '</a>';
		}
	}

// USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
//require_once( 'library/custom-post-type.php' );

