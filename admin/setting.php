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

    load_assets();
}

/**
 * Load Backend Assets
 *
 * @since 1.0.0
 * @return string
 */
function load_assets()
{

    $menu_page_url = menu_page_url(ZOO_LN_ADMIN_MENU_SLUG, false);
    $menu_page_url .= '&section=setting';

    wp_enqueue_style('zoo-ln', ZOO_LN_CSSPATH . 'admin/style.css');
    wp_register_script('zoo-ln-admin-jquery-ui', ZOO_LN_JSPATH."jquery-ui.min.js",
        array('jquery'), ZOO_LN_VERSION, TRUE);
    wp_register_script('zoo-ln-admin-filter-setting', ZOO_LN_JSPATH."admin/items.js",
        array('jquery'), ZOO_LN_VERSION, TRUE);
    wp_localize_script('zoo-ln-admin-filter-setting', 'zoo_ln_params',
        array(
            'ajax_url' => $menu_page_url
        )
    );
    wp_enqueue_script('zoo-ln-admin-jquery-ui');
    wp_enqueue_script('zoo-ln-admin-filter-setting');
}
