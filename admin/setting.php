<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 12:05 AM
 */

namespace Zoo\Admin\Setting;


//load admin template
load_page();

//process save option
save_setting();

//function
function load_page() {
    $_section = 'general';

    if ( isset( $_GET['section'] ) ) {
        $_section = $_GET['section'];
    }

    require_once ZOO_LN_TEMPLATES_PATH.'admin/view.php';

    if ($_section == 'general') {
        require_once ZOO_LN_TEMPLATES_PATH.'admin/general.php';
    }else if ($_section == 'setting') {
        require_once ZOO_LN_TEMPLATES_PATH.'admin/setting.php';
    }
}
function save_setting() {

    var_dump($_POST);

    if ( isset( $_POST['zoo_ln_nonce_setting'] ) && wp_verify_nonce( $_POST['zoo_ln_nonce_setting'], 'save_setting' ) ) {
        // process form data

    }
}