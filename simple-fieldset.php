<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.reneecampanilla.com
 * @since             1.0.0
 * @package           Simple_Fieldset
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Fieldset with Font Awesome Icons
 * Plugin URI:        https://github.com/reneecampanilla/simple-fieldset
 * Description:       This is a simple Wordpress plugin that renders fieldsets with Font Awesome icons in the legend section.
 * Version:           1.0.0
 * Author:            Renee Campanilla
 * Author URI:        www.reneecampanilla.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-fieldset
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-simple-fieldset-activator.php
 */
function activate_simple_fieldset() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-fieldset-activator.php';
	Simple_Fieldset_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-simple-fieldset-deactivator.php
 */
function deactivate_simple_fieldset() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-fieldset-deactivator.php';
	Simple_Fieldset_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_simple_fieldset' );
register_deactivation_hook( __FILE__, 'deactivate_simple_fieldset' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simple-fieldset.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_simple_fieldset() {

	$plugin = new Simple_Fieldset();
	$plugin->run();

}
run_simple_fieldset();
