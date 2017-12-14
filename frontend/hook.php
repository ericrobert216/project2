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

    global $wp_query;

    var_dump($_POST);

    //echo('<pre/>');

    //var_dump($wp_query->query);

    $arg = $wp_query->query;

    $arg['meta_query'] = array(
        'relation' => 'AND',
        array(
           'key'     => '_regular_price',
           'value'   => array( 0, 6000 ),
           'type'    => 'numeric',
           'compare' => 'BETWEEN',
        ),
        array(
            'key'     => '_stock_status',
            'value'   => 'instock',
            'compare' => '='
        ),
        array(
            'key'     => '_wc_average_rating',
            'value'   => 0,
            'type'    => 'numeric',
            'compare' => '>='
        ),
        array(
            'key'     => '_wc_review_count',
            'value'   => 0,
            'type'    => 'numeric',
            'compare' => '>='
        )
    );


    $arg['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => array( 17,16 ),
        )
    );


    $my_query = new \WP_Query( $arg );

    $wp_query = null;
    $wp_query = $my_query;

    //var_dump($wp_query->request);

    require_once ZOO_LN_TEMPLATES_PATH.'view.php';
}