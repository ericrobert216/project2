<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:17 PM
 */

namespace Zoo\Admin\Install;

add_table_for_global_config();
add_table_for_filter_config();

function add_table_for_global_config() {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoo_ln_global_config";

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                config_id int(10) NOT NULL AUTO_INCREMENT,
                config_name varchar(256) DEFAULT '' NULL,
                config_value longtext DEFAULT '' NULL,
                PRIMARY KEY  (config_id)
                ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

function add_table_for_filter_config() {
    global $wpdb;
    $table_name = $wpdb->prefix . "zoo_ln_filter_config";

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                filter_id int(10) NOT NULL AUTO_INCREMENT,
                filter_item_name varchar(256) DEFAULT '' NULL,
                filter_item_type varchar(256) DEFAULT '' NULL
                filter_config_value longtext DEFAULT '' NULL,
                PRIMARY KEY  (filter_id)
                ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}