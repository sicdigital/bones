<?php
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'sic-theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
		'icon_url'		=> get_stylesheet_directory_uri() . '/library/images/sic-logo-no-black32x32.png'
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Quick Start',
		'parent_slug'	=> 'sic-theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Navigation',
		'menu_title'	=> 'Navigation',
		'parent_slug'	=> 'sic-theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'sic-theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Typography',
		'menu_title'	=> 'Typography',
		'parent_slug'	=> 'sic-theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Hooks',
		'menu_title'	=> 'Hooks',
		'parent_slug'	=> 'sic-theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Styling & Layout',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'sic-theme-settings',
	));

}

add_action('admin_head', function(){
	echo '<style>.toplevel_page_acf-options-quick-start img{ width:22px; height: 22px; padding-top: 6px !important; }</style>';
});