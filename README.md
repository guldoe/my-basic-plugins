# my-basic-plugins

Using TGM library to create a plugin that install and download other plugins easily.



See more 
http://www.danielcastanera.com/tgm-automatizar-instalacion-plugins-wordpress/

My favourites not necesary install all. 

Security - Ithemes Security - Sucuri
Seo  Yoast
Backup - BackupWordPress
WPO - Autoptimize

$plugins = array( 
	
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'required'  => true,
		),
		array(
			'name'        => 'BackupWordPress',
			'slug'        => 'backupwordpress',
			'required'  => true,
		),
		
		array(
			'name'        => 'iThemes Security',
			'slug'        => 'better-wp-security',
			'required'  => false,
		), 
		
		array(
			'name'        => 'Sucuri',
			'slug'        => 'sucuri-scanner',
			'required'  => false,
		), 
		array(
			'name'        => 'Autoptimize',
			'slug'        => 'autoptimize',
			'required'  => false,
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
			'required'  => false,
		),
		array(
			'name'        => 'Widgets Page Origin',
			'slug'        => 'so-widgets-bundle',
			'required'  => false,
		),
		array(
			'name'        => 'WP fastest cache',
			'slug'        => 'wp-fastest-cache',
			'required'  => false,
		),
		array(
			'name'        => 'WP super cache',
			'slug'        => 'wp-super-cache',
			'required'  => false,
		),
		array(
			'name'        => 'Google analytics for WordPress',
			'slug'        => 'google-analytics-for-wordpress',
			'required'  => false,
		),
		array(
			'name'        => 'Cookies law',
			'slug'        => 'cookie-law-info',
			'required'  => false,
		),
		
		);
