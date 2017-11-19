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

//function
function load_page() {
    $_section = 'general';

    if ( isset( $_GET['section'] ) ) {
        $_section = $_GET['section'];
    }

    require_once ZOO_LN_TEMPLATES_PATH.'admin/tabs.php';

    if ($_section == 'general') {
        require_once ZOO_LN_DIRPATH.'admin/setting/general-setting.php';
    } else if ($_section == 'setting') {
        require_once ZOO_LN_DIRPATH.'admin/setting/filter-setting.php';
    } else if ($_section == 'style') {
        require_once ZOO_LN_DIRPATH.'admin/setting/filter-style.php';
    } else if ($_section == 'advanced') {
        require_once ZOO_LN_DIRPATH.'admin/setting/advanced-setting.php';
    }
}
