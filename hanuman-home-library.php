<?php
/**
 * @package   Hanuman Home Library
 * @author    a.kolyan <hanumanum@gmail.com>
 * @license   GPL-2.0+
 * @link      http://ablog.gratun.am
 * @copyright 2013 Hanuman
 *
 * @wordpress-plugin
 * Plugin Name: Hanuman Home Library
 * Plugin URI:  http://ablog.gratun.am/HanumanHomeLibrary
 * Description: Book cathalogizator for personal library in Wordpress
 * Version:     1.0.0
 * Author:      a.kolyan (aka hanuman)
 * Author URI:  http://ablog.gratun.am
 * Text Domain: hanuman-home-library
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-hanuman-home-library.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'hanuman_home_library', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'hanuman_home_library', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Hanuman_home_library', 'get_instance' ) );

include(plugin_dir_path( __FILE__ )."customtypes.php");
include(plugin_dir_path( __FILE__ )."widgets.php");
include(plugin_dir_path( __FILE__ )."functions.php");

