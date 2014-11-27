<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Portfolio_Post_Type
 * @author    Steve Sinnwell <steve@kopfwelt.com>
 * @license   GPL-2.0+
 * @link      http://kopfwelt.com
 * @copyright 2014 Steve Sinnwell
 *
 * @wordpress-plugin
 * Plugin Name:       Portfolio Post Type
 * Plugin URI:       http://code.kopfwelt.com/wordpress/portfolio
 * Description:       Adds custom post type portfolio to wordpress
 * Version:           1.0.0
 * Author:       Steve Sinnwell
 * Author URI:       http://kopfwelt.com
 * Text Domain:       portfolio-post-type
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-portfolio-post-type.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-portfolio-post-type.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Portfolio_Post_Type with the name of the class defined in
 *   `class-portfolio-post-type.php`
 */
register_activation_hook( __FILE__, array( 'Portfolio_Post_Type', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Portfolio_Post_Type', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Portfolio_Post_Type with the name of the class defined in
 *   `class-portfolio-post-type.php`
 */
add_action( 'plugins_loaded', array( 'Portfolio_Post_Type', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-portfolio-post-type-admin.php` with the name of the plugin's admin file
 * - replace Portfolio_Post_Type_Admin with the name of the class defined in
 *   `class-portfolio-post-type-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-portfolio-post-type-admin.php' );
	add_action( 'plugins_loaded', array( 'Portfolio_Post_Type_Admin', 'get_instance' ) );

}
