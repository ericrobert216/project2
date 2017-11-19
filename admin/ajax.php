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

    var_dump($_POST);

    wp_send_json( $data );

    wp_die();
}