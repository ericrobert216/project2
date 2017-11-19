<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:11 PM
 */

namespace Zoo\Admin\Hook;

//add hook load admin template



//add hook
register_activation_hook( ZOO_LN_DIRPATH.'clever-layered-navigation.php', 'Zoo\Admin\Hook\active_action' );
//register_deactivation_hook( __FILE__, array( $zoo_clever_swatch_install, 'zoo_cw_deactive_action' ) );
add_action( 'admin_menu', 'Zoo\Admin\Hook\register_zoo_ln_menu_page' );


//functions

function register_zoo_ln_menu_page(){
    add_menu_page(__( 'CleverSoft', 'clever-layered-navigation' ), __( 'CleverSoft', 'clever-layered-navigation' ), 'manage_woocommerce', 'zoo-cs-settings', null,ZOO_LN_GALLERYPATH.'cleverswatch.png',54.560 );
    add_submenu_page( 'zoo-cs-settings', __( 'Layered Navigation', 'clever-layered-navigation' ),  __( 'Layered Navigation', 'clever-layered-navigation' ) , 'manage_woocommerce', 'zoo-ln-settings', 'Zoo\Admin\Hook\settings_callback' );
}

function settings_callback(){
    require_once ZOO_LN_DIRPATH.'admin/setting.php';
}

function active_action() {
    require_once ZOO_LN_DIRPATH.'admin/install.php';
}