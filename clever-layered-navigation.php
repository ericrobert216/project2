<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:01 PM
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


//defined all Constant
$plugin_path = dirname(plugin_dir_path( __FILE__ ))."/";
$file_url = plugin_dir_url( __FILE__ );
$plugin_url = substr($file_url, 0, strpos($file_url, 'includes'));
define( 'ZOO_LN_DIRPATH', $plugin_path );
define( 'ZOO_LN_TEMPLATES_PATH', $plugin_path."templates/" );
define( 'ZOO_LN_URL', $plugin_url );
define( 'ZOO_LN_JSPATH', $plugin_url."assets/js/" );
define( 'ZOO_LN_CSSPATH', $plugin_url."assets/css/" );
define( 'ZOO_LN_GALLERYPATH', $plugin_url."assets/images/" );


//include helper functions
require_once(ZOO_LN_DIRPATH . 'data.php');


//router admin or frontend
if (check_woocommerce_active()) {
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