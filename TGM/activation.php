<?php 
require_once get_theme_file_path('inc/TGM/class-tgm-plugin-activation.php');
function consult_require_plugin(){
	$pluigns=array(
		array(
		'name' => 'Contact Form by WPForms – Drag & Drop Form Builder for WordPress',
		'slug' => 'wpforms-lite',
		'required' => true,
		//must be include source and default path in 
		'source' => 'wpforms-lite.1.6.2.3.zip',
		// Personal web-source
		//'source' => 'http://plugins.com/wpforms-lite.1.6.2.3.zip',
		'force_activation' => true,
		'force_deactivation' => true,
	));

	$config=array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => get_theme_file_uri().'/plugins/',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);
tgmpa($pluigns, $config);
}
add_action('tgmpa_register','consult_require_plugin');