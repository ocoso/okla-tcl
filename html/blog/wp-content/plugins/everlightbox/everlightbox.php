<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.greentreelabs.net
 * @since             1.0.0
 * @package           Everlightbox
 *
 * @wordpress-plugin
 * Plugin Name:       EverlightBox
 * Plugin URI:        everlightbox
 * Description:       Light and stylish lightbox for WordPress
 * Version:           1.0.1
 * Author:            GreenTreeLabs
 * Author URI:        http://www.greentreelabs.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       everlightbox
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



function activate_everlightbox() {	
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-everlightbox-activator.php';
	Everlightbox_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-everlightbox-deactivator.php
 */
function deactivate_everlightbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-everlightbox-deactivator.php';
	Everlightbox_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_everlightbox' );
register_deactivation_hook( __FILE__, 'deactivate_everlightbox' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-everlightbox.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */


function run_everlightbox() {

	$plugin = new Everlightbox();
	$plugin->run();

}
run_everlightbox();
