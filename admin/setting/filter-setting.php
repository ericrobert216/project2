<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:51 PM
 */

namespace Zoo\Admin\Setting\FilterSetting;

$data = prepare_data();

require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting.php';

function prepare_data() {
    $filter_setting_order = \Zoo\Helper\Data\get_global_config_with_name('filter-setting-order');
    $filter_setting_order = (array)json_decode($filter_setting_order);
    foreach ($filter_setting_order as $sac) {
        var_dump($sac);
    }
    var_dump($filter_setting_order);
}