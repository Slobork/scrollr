<?php

    if ( ! defined( 'ABSPATH' ) ) exit;

    /*
     * Plugin Name:         Scrollr
     * Description:         Scroll smoothly to a page's section. Just link to the element's id on the same page and smothly scroll to it.
     * Author:              maxPressy
     * Author URI:          https://maxpressy.com
     * Version:             1.0.2
     * Text Domain:         max_boxy
     * Domain Path:         /languages
     * Requires at least:   5.8
     */

    /* -------------------------------------------------------
     * Version
     * ------------------------------------------------------*/
    if ( ! function_exists( 'scrollr_version' ) ) {

        function scrollr_version() {

            $plugin_version = '1.0.2';

            return $plugin_version;

        }

    }


    /* -------------------------------------------------------
     * Enqueue
     * -------------------------------------------------------*/
    if ( ! function_exists( 'scrollr_scripts' ) ) {

        function scrollr_scripts() {

            $plugin_version = scrollr_version();

            wp_enqueue_script( 'scrollr', plugins_url( '/library/js/min/main.js', __FILE__ ), array( 'jquery' ), $plugin_version, true );
            
            // for debugging
            //wp_enqueue_script( 'scrollr', plugins_url( '/library/js/src/main.js', __FILE__ ), array( 'jquery' ), $plugin_version, true );
  

        }
        add_action( 'wp_footer', 'scrollr_scripts' );

    }
