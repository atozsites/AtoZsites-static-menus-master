<?php
/**
 * Plugin Name: AtozSites Static Menus
 * Description: Cache navigation menus in static HTML for big performance gains.
 * Version: 1.0.0
 * Author: AtozSites
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Setup the plugin constants
 */
define( 'ATOZSites_STATIC_MENUS_VERSION', '1.0.0' );
define( 'ATOZSites_STATIC_MENUS_SLUG', 'wp-static-menus' );
define( 'ATOZSites_STATIC_MENUS_FILE', __FILE__ );
define( 'ATOZSites_STATIC_MENUS_DIR', plugin_dir_path( ATOZSites_STATIC_MENUS_FILE ) );
define( 'ATOZSites_STATIC_MENUS_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( ATOZSites_STATIC_MENUS_FILE ) ), basename( ATOZSites_STATIC_MENUS_FILE ) ) ) );

/**
 * Require Plugin Files
 */
require_once 'includes/class-ATOZSites-static-menus.php';

/**
 * Start the engines
 */
ATOZSites_static_menus();

/**
 * Wrapper for getting global $ATOZSites_static_menus and ensuring it is an instance of ATOZSites_Static_Menus
 *
 * @return ATOZSites_Static_Menus
 */
function ATOZSites_static_menus() {
    global $ATOZSites_static_menus;

    if( ! $ATOZSites_static_menus instanceof ATOZSites_Static_Menus ) {
        $ATOZSites_static_menus = new ATOZSites_Static_Menus;
    }

    return $ATOZSites_static_menus;
}