<?php
 
/*
Plugin Name: Plugins basicos
Plugin URI: http://www.danielcastanera.com/plugin-para-instalar-varios-plugins-wordpress
Description: Plugin que recomienda a otros plugins 
Author: Daniel Castanera
Version: 1.0
Author URI: http://www.danielcastanera.com/
*/

require_once dirname( __FILE__ ) . '/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'pluginsbasicos_register_required_plugins' );

/**
 * Register the required plugins 
 *
 */
function pluginsbasicos_register_required_plugins() {

	$plugins = array( 
	
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'required'  => true,
		),
		array(
			'name'        => 'iThemes Security',
			'slug'        => 'better-wp-security',
			'required'  => true,
		),
		array(
			'name'        => 'iThemes Security',
			'slug'        => 'better-wp-security',
			'required'  => true,
		),
		
		array(
			'name'        => 'Autoptimize',
			'slug'        => 'autoptimize',
			'required'  => true,
		),
		array(
			'name'        => 'Easy WP SMTP',
			'slug'        => 'easy-wp-smtp',
			'required'  => true,
		),		
		array(
			'name'        => 'Contact Form 7',
			'slug'        => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'        => 'Page Origin',
			'slug'        => 'siteorigin-panels',
			'required'  => true,
		),
		array(
			'name'        => 'Widgets Page Origin',
			'slug'        => 'so-widgets-bundle',
			'required'  => true,
		),
		);

	
	// esta informacion la dejare por defecto. 
	$config = array(
		'id'           => 'pluginsbasicos',        // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}