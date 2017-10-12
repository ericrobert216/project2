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

//functions

function active_action() {
    //add config table
}