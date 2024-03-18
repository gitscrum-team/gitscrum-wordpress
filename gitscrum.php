<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://about.gitscrum.com
 * @since             1.0.0
 * @package           Gitscrum
 *
 * @wordpress-plugin
 * Plugin Name:       GitScrum
 * Plugin URI:        https://about.gitscrum.com
 * Description:       The GitScrum plugin for WordPress empowers you to seamlessly manage your projects directly within the WordPress platform. With this innovative plugin, you gain a robust project management solution that seamlessly integrates into your WordPress environment. Streamline your workflow, collaborate effortlessly, and enhance productivity as you navigate and control your projects—all within the familiar and user-friendly WordPress interface. 
 * Version:           1.0.0
 * Author:            Gitscrum
 * Author URI:        https://about.gitscrum.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gitscrum
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GITSCRUM_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/gitscrum-activator.php
 */
function activate_gitscrum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/gitscrum-activator.php';
	Gitscrum_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/gitscrum-deactivator.php
 */
function deactivate_gitscrum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/gitscrum-deactivator.php';
	Gitscrum_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gitscrum' );
register_deactivation_hook( __FILE__, 'deactivate_gitscrum' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/gitscrum.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gitscrum() {

	$plugin = new Gitscrum();
	$plugin->run();

}
run_gitscrum();
