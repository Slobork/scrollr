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
 * Version:             1.0.2
 * Text Domain:         scrollr
 * Domain Path:         none, no strings to translate yet.
 * Requires at least:   5.8
 */

if (! defined('ABSPATH') ) {
    exit;
}

if (! function_exists('scrollr_version') ) {

    /**
     * Version.
     *
     * @return string Plugin's version.
     */
    // phpcs:ignore
    function scrollr_version()
    {

        $plugin_version = '1.0.2';
        return $plugin_version;
    }

}


if (! function_exists('scrollr_scripts') ) {

    /**
     * Enqueue.
     *
     * @return null Calling enqueueing functions.
     */
     // phpcs:ignore
    function scrollr_scripts() 
    {

        $plugin_version = scrollr_version();

        wp_enqueue_script('scrollr', plugins_url('/library/js/min/main.js', __FILE__), array( 'jquery' ), $plugin_version, true);
            
        // for debugging
        //wp_enqueue_script( 'scrollr', plugins_url( '/library/js/src/main.js', __FILE__ ), array( 'jquery' ), $plugin_version, true );
  

    }
    add_action('wp_footer', 'scrollr_scripts');

}
