<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/20/17
 * Time: 3:27 AM
 */

namespace Zoo\Admin\Ajax;

function zoo_ln_save_filter() {

    $filter_item_name = (string)$_POST['item-id'];
    $filter_item_type = (string)$_POST['item-type'];
    $filter_config_value = json_encode($_POST[$filter_item_type]);

    $data = array (
        'filter_item_name' => $filter_item_name,
        'filter_item_type' => $filter_item_type,
        'filter_config_value' => $filter_config_value
    );

    \Zoo\Helper\Data\save_filter_config_with_name($filter_item_name, $data);

    wp_send_json( $_POST );

    wp_die();
}

function zoo_ln_save_filter_order() {

    if ( isset( $_POST['zoo_ln_nonce_setting'] ) && wp_verify_nonce( $_POST['zoo_ln_nonce_setting'], 'filter_setting' ) ) {
        // process form data
        $post_data = $_POST;
        $data = json_encode($post_data['sidebars']);
        \Zoo\Helper\Data\save_global_config_with_name('filter-setting-order', $data);
    }
    $data = array (
        'result' => 'done'
    );

    wp_send_json( $data );

    wp_die();
}