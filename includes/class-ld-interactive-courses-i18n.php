<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.metaninjas.com/products
 * @since      1.0.0
 *
 * @package    Ld_Interactive_Courses
 * @subpackage Ld_Interactive_Courses/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ld_Interactive_Courses
 * @subpackage Ld_Interactive_Courses/includes
 * @author     WP Meta Ninjas <support@wpmetaninjas.com>
 */
class Ld_Interactive_Courses_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ld-interactive-courses',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
