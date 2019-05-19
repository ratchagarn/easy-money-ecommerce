<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/ratchagarn
 * @since             1.1.0
 * @package           Easy_Money_Ecommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Easy monery e-Commerce
 * Plugin URI:        https://github.com/ratchagarn/easy-money-ecommerce
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.1.0
 * Author:            Ratchagarn Naewbuntad
 * Author URI:        https://github.com/ratchagarn
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easy-money-ecommerce
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EASY_MONEY_ECOMMERCE_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easy-money-ecommerce-activator.php
 */
function activate_easy_money_ecommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easy-money-ecommerce-activator.php';
	Easy_Money_Ecommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easy-money-ecommerce-deactivator.php
 */
function deactivate_easy_money_ecommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easy-money-ecommerce-deactivator.php';
	Easy_Money_Ecommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_easy_money_ecommerce' );
register_deactivation_hook( __FILE__, 'deactivate_easy_money_ecommerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-easy-money-ecommerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.0
 */
function run_easy_money_ecommerce() {
	$plugin = new Easy_Money_Ecommerce();
	$plugin->run();

	add_filter( 'auto_update_plugin', '__return_true' );
}

run_easy_money_ecommerce();
