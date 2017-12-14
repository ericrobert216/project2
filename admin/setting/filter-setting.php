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
    $data = array();

    $filter_setting_order = \Zoo\Helper\Data\get_global_config_with_name('filter-setting-order');
    $filter_setting_order = (array)json_decode($filter_setting_order);

    if (isset($filter_setting_order['sidebar-1'])) {
        $filter_setting_order = $filter_setting_order['sidebar-1'];
        $filter_setting_order = explode(',', $filter_setting_order);

        $array_multi_number = array();
        foreach ($filter_setting_order as $item) {
            if ($item != '') {
                $item_data = array();

                $parts = explode('-', $item);
                $item_number = array_pop($parts);
                $item_type = implode('-', $parts);

                $item_data['item_number'] = $item_number;
                $item_data['item_type'] = $item_type;
                $filter_config = \Zoo\Helper\Data\get_filter_config_with_name($item);

//                echo('<pre/>');
//                var_dump($filter_setting_order);
//                var_dump($filter_config);
//                die;

                $sac = json_decode($filter_config['filter_config_value']);
                $sac = objectToArray($sac);
                $filter_config['filter_config_value'] = $sac;
                $item_data['item_config_value'] = $filter_config;


                $data[] = $item_data;
            }
        }
    }

    return $data;
}

function prepare_multi_number() {
    $filter_setting_order = \Zoo\Helper\Data\get_global_config_with_name('filter-setting-order');
    $filter_setting_order = (array)json_decode($filter_setting_order);

    $array_multi_number = array();
    foreach ($filter_setting_order as $item) {
        $parts = explode('-', $item);
        $item_number = intval(array_pop($parts));
        $item_type = implode('-', $parts);

        if (!isset($array_multi_number[$item_type]) || ($array_multi_number[$item_type] <= $item_number) ) {
            $array_multi_number[$item_type] = $item_number + 1;
        }
    }


    return $array_multi_number;
}

function objectToArray($d) {
    if (is_object($d)) {
        // Gets the properties of the given object
        // with get_object_vars function
        $d = get_object_vars($d);
    }

    if (is_array($d)) {
        /*
        * Return array converted to object
        * Using __FUNCTION__ (Magic constant)
        * for recursive call
        */
        return array_map(__FUNCTION__, $d);
    }
    else {
        // Return array
        return $d;
    }
}