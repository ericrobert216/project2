<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:51 PM
 */

namespace Zoo\Admin\Setting\FilterSetting;



require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting.php';

function prepare_data() {
    $filter_setting_order = \Zoo\Helper\Data\get_global_config_with_name('filter-setting-order');
    $filter_setting_order = (array)json_decode($filter_setting_order);

    $array_multi_number = array();
    foreach ($filter_setting_order as $item) {

        $parts = explode('-', $item);
        $item_number = array_pop($parts);
        $item_type = implode('-', $parts);

        if (!isset($array_multi_number[$item_type]) || ($array_multi_number[$item_type] < $item_number) ) {
            $array_multi_number[$item_type] = $item_number;
        }

        $data['filter'][] = \Zoo\Helper\Data\get_filter_config_with_name($item);
//
        //echo('<pre/>');
        //var_dump($data);
        //die;
    }

    return $data;
}