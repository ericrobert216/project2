<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:11 PM
 */

namespace Zoo\Frontend\Hook;

//woocommerce_before_shop_loop

add_action( 'woocommerce_before_shop_loop', 'Zoo\Frontend\Hook\add_zoo_ln_navigation' );


function add_zoo_ln_navigation(){
    require_once ZOO_LN_TEMPLATES_PATH.'view.php';
}