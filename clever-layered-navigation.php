<?php
/**
 * Plugin Name: CleverLayeredNavigation
 * Description: abcd.
 * Version: 1.0.1
 * Author: cleversoft.co <hello.cleversoft@gmail.com>
 * Requires at least: 4.6.1
 * Requires WooCommerce at least: 3.x
 * Tested up to: 4.8.2
 *
 * Text Domain: clever-layered-navigation
 * Domain Path: /i18n/languages/
 *
 * @package clever-layered-navigation
 * @author cleversoft.co
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


//defined all Constant
$plugin_path = plugin_dir_path( __FILE__ )."/";
$plugin_url = plugin_dir_url( __FILE__ );

define( 'ZOO_LN_DIRPATH', $plugin_path );
define( 'ZOO_LN_TEMPLATES_PATH', $plugin_path."templates/" );
define( 'ZOO_LN_URL', $plugin_url );
define( 'ZOO_LN_JSPATH', $plugin_url."assets/js/" );
define( 'ZOO_LN_CSSPATH', $plugin_url."assets/css/" );
define( 'ZOO_LN_GALLERYPATH', $plugin_url."assets/images/" );


//include helper functions
require_once(ZOO_LN_DIRPATH . 'helper/data.php');


//router admin or frontend
if (Zoo\Helper\Data\check_woocommerce_active()) {
    if (is_admin()) {
        //add hook admin
        require_once(ZOO_LN_DIRPATH . 'admin/hook.php');
    } else {
        //add hook frontend
        require_once(ZOO_LN_DIRPATH . 'frontend/hook.php');
    }
} else {
    if (is_admin()) {
        //echo missing woocommerce
    }
}