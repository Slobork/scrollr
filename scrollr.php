<?php
/**
 * Plugin Name:         Scrollr
 * Description:         Scroll smoothly to a page's section.
 *
 * PHP version  7.3.5
 *
 * @category Scrolling
 * @package  Scrollr
 * @author   MaxPressy <webmaster@maxpressy.com>
 * @license  GPL v2 or later
 * @link     maxpressy.com
 *
 * Author:              MaxPressy
 * Author URI:          https://maxpressy.com
 * License:             GPL v2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Version:             1.0.4
 * Text Domain:         scrollr
 * Domain Path:         none, no strings to translate yet.
 * Requires at least:   5.8
 */

if (! defined('ABSPATH') ) {
    exit;
}

// Plugin data (getting plugin version, name, etc.)
if (! function_exists('get_plugin_data')) {
    include_once ABSPATH .'wp-admin/includes/plugin.php';
}
$plugin_data = get_plugin_data(__FILE__);
define('SCROLLR', ($plugin_data && $plugin_data['Name']) ? $plugin_data['Name'] : 'Scrollr');
define('SCROLLR_VERSION', ($plugin_data && $plugin_data['Version']) ? $plugin_data['Version'] : '1.0.0');

if (! function_exists('scrollr_scripts') ) {

    /**
     * Enqueue.
     *
     * @return null Calling enqueueing functions.
     */
     // phpcs:ignore
    function scrollr_scripts() 
    {
        wp_enqueue_script('scrollr', plugins_url('/library/js/min/main.js', __FILE__), array( 'jquery' ), SCROLLR_VERSION, array('strategy' => 'defer'));

        // for debugging
        //wp_enqueue_script( 'scrollr', plugins_url( '/library/js/src/main.js', __FILE__ ), array( 'jquery' ), SCROLLR_VERSION, array('strategy' => 'defer') );

    }
    add_action('wp_footer', 'scrollr_scripts');

}
