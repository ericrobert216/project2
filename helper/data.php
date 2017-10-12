<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/12/17
 * Time: 12:38 AM
 */

namespace Zoo\Helper\Data;

function check_woocommerce_active(){

    return true;

    if ( function_exists('is_multisite') && is_multisite() ){

        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ){

            return true;
        }
        return false;
    }else{

        if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) ){

            return true;
        }
        return false;
    }
}

//function get config