<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/20/17
 * Time: 3:27 AM
 */

namespace Zoo\Admin\Ajax;

function zoo_ln_save_filter() {
    $data = array (
        'result' => 'error',
        'image_url' => ''
    );

    //var_dump($_POST);

    wp_send_json( $_POST );

    wp_die();
}

function zoo_ln_save_filter_order() {

    if ( isset( $_POST['zoo_ln_nonce_setting'] ) && wp_verify_nonce( $_POST['zoo_ln_nonce_setting'], 'filter_setting' ) ) {
        // process form data
        $post_data = $_POST;
//        unset($post_data['action']);
//        unset($post_data['zoo_ln_nonce_setting']);
//        unset($post_data['_wp_http_referer']);
        $data = json_encode($post_data['sidebars']);
        var_dump($data);
        \Zoo\Helper\Data\save_global_config_with_name('filter-setting-order', $data);
    }
    $data = array (
        'result' => 'done'
    );

    wp_send_json( $data );

    wp_die();
}