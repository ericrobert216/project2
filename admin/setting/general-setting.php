<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:54 PM
 */

namespace Zoo\Admin\Setting\GeneralSetting;

save_setting();
$data = prepare_data();

require_once ZOO_LN_TEMPLATES_PATH.'admin/general-setting.php';


function save_setting() {
    if ( isset( $_POST['zoo_ln_nonce_setting'] ) && wp_verify_nonce( $_POST['zoo_ln_nonce_setting'], 'general_setting' ) ) {
        // process form data
        $post_data = $_POST;
        unset($post_data['zoo_ln_nonce_setting']);
        unset($post_data['_wp_http_referer']);
        $data = json_encode($post_data);
        save_global_config_with_name('general-setting', $data);
    }
}

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

function prepare_data() {
    $raw_data = get_global_config_with_name('general-setting');
    $data = (array)json_decode($raw_data);
    return ($data);
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