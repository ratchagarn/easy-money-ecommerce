<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/ratchagarn
 * @since      1.0.0
 *
 * @package    Easy_Money_Ecommerce
 * @subpackage Easy_Money_Ecommerce/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Easy_Money_Ecommerce
 * @subpackage Easy_Money_Ecommerce/includes
 * @author     Ratchagarn Naewbuntad <ratchagarn@gmail.com>
 */
class Easy_Money_Ecommerce_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'easy-money-ecommerce',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
