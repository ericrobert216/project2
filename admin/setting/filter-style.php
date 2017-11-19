<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:54 PM
 */

namespace Zoo\Admin\Setting\FilterStyle;

save_setting();
$data = prepare_data();

require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-style.php';


function save_setting() {
    if ( isset( $_POST['zoo_ln_nonce_setting'] ) && wp_verify_nonce( $_POST['zoo_ln_nonce_setting'], 'filter_style' ) ) {
        // process form data
        $post_data = $_POST;
        unset($post_data['zoo_ln_nonce_setting']);
        unset($post_data['_wp_http_referer']);
        $data = json_encode($post_data);
        \Zoo\Helper\Data\save_global_config_with_name('filter-style', $data);
    }
}

function prepare_data() {
    $raw_data = \Zoo\Helper\Data\get_global_config_with_name('filter-style');
    $data = (array)json_decode($raw_data);
    return ($data);
}
