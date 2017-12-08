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

//db function

function save_global_config_with_name($name = null, $value = null) {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoo_ln_global_config";

    if (!is_null($name) && !is_null($name)) {
        $name = (string)$name;
        $value = (string)$value;
        // save config to db
        $mylink = $wpdb->get_row( "SELECT * FROM $table_name WHERE config_name = '$name'" );
        if (isset($mylink)) {
            $config_id = $mylink->config_id;

            $wpdb->update(
                $table_name,
                array('config_value' => $value),
                array('config_id' => $config_id)
            );
        } else {
            $wpdb->insert(
                $table_name,
                array(
                    'config_name' => $name,
                    'config_value' => $value
                )
            );
        }
    }
}

function get_global_config_with_name($name = "") {
    $value = false;

    if ($name != '') {

        global $wpdb;
        $table_name = $wpdb->prefix . "zoo_ln_global_config";

        $mylink = $wpdb->get_row( "SELECT * FROM $table_name WHERE config_name = '$name'" );

        if (isset($mylink)) {
            $value = $mylink->config_value;
        }
    }

    return $value;
}

function save_filter_config_with_name($name = null, $data = null) {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoo_ln_filter_config";

    if (!is_null($name) && !is_null($name)) {
        $name = (string)$name;
        // save config to db
        $mylink = $wpdb->get_row( "SELECT * FROM $table_name WHERE filter_item_name = '$name'" );
        if (isset($mylink)) {
            $filter_id = $mylink->filter_id;
            $wpdb->update(
                $table_name,
                array(
                    'filter_item_name' => $data['filter_item_name'],
                    'filter_item_type' => $data['filter_item_type'],
                    'filter_config_value' => $data['filter_config_value'],
                ),
                array('filter_id' => $filter_id)
            );
        } else {
            $wpdb->insert(
                $table_name,
                array(
                    'filter_item_name' => $data['filter_item_name'],
                    'filter_item_type' => $data['filter_item_type'],
                    'filter_config_value' => $data['filter_config_value'],
                )
            );
        }
    }
}

function get_filter_config_with_name($name = "") {
    $data = array();

    if ($name != '') {
        global $wpdb;
        $table_name = $wpdb->prefix . "zoo_ln_filter_config";
        $mylink = $wpdb->get_row( "SELECT * FROM $table_name WHERE filter_item_name = '$name'" );
        if (isset($mylink)) {
            $data = (array)$mylink;
        }
    }

    return $data;
}