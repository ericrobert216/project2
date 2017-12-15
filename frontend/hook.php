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

    $selected_filter_option = $_POST;

    process_filter();

    //var_dump($selected_filter_option);

    //echo('<pre/>');

    //var_dump($wp_query->query);

//    $arg = $wp_query->query;
//
//    $arg['meta_query'] = array(
//        'relation' => 'AND',
//        array(
//           'key'     => '_regular_price',
//           'value'   => array( 0, 6000 ),
//           'type'    => 'numeric',
//           'compare' => 'BETWEEN',
//        ),
//        array(
//            'key'     => '_stock_status',
//            'value'   => 'instock',
//            'compare' => '='
//        ),
//        array(
//            'key'     => '_wc_average_rating',
//            'value'   => 0,
//            'type'    => 'numeric',
//            'compare' => '>='
//        ),
//        array(
//            'key'     => '_wc_review_count',
//            'value'   => 0,
//            'type'    => 'numeric',
//            'compare' => '>='
//        )
//    );
//
//
//    $arg['tax_query'] = array(
//        array(
//            'taxonomy' => 'product_cat',
//            'field'    => 'term_id',
//            'terms'    => array( 17,16 ),
//        )
//    );
//
//
//    $my_query = new \WP_Query( $arg );
//
//    $wp_query = null;
//    $wp_query = $my_query;

    //var_dump($wp_query->request);

    require_once ZOO_LN_TEMPLATES_PATH.'view.php';
}

function prepare_data() {
    $data = array();

    $filter_setting_order = \Zoo\Helper\Data\get_global_config_with_name('filter-setting-order');
    $filter_setting_order = (array)json_decode($filter_setting_order);

    if (isset($filter_setting_order['sidebar-1'])) {
        $filter_setting_order = $filter_setting_order['sidebar-1'];
        $filter_setting_order = explode(',', $filter_setting_order);

        foreach ($filter_setting_order as $item) {
            if ($item != '') {
                $item_data = array();

                $parts = explode('-', $item);
                $item_number = array_pop($parts);
                $item_type = implode('-', $parts);

                $item_data['item_number'] = $item_number;
                $item_data['item_type'] = $item_type;
                $filter_config = \Zoo\Helper\Data\get_filter_config_with_name($item);

                $sac = json_decode($filter_config['filter_config_value']);
                $sac = \Zoo\Helper\Data\objectToArray($sac);
                $filter_config['filter_config_value'] = $sac;
                $item_data['item_config_value'] = $filter_config;


                $data[] = $item_data;
            }
        }
    }

    return $data;
}

function process_filter(){
    global $wp_query;
    $selected_filter_option = $_POST;

    $arg = $wp_query->query;

    foreach($selected_filter_option as $key => $option) {
        if ($key == 'in-stock' && $option == '1') {
            $arg['meta_query'][] = array(
                    'key'     => '_stock_status',
                    'value'   => 'instock',
                    'compare' => '='
                );
        } else if ($key == 'on-sale' && $option == '1') {
            $date = date_create();
            $time =  date_timestamp_get($date);
            $arg['meta_query'][] = array(
                'key'     => '_sale_price',
                'value'   => '',
                'compare' => '!='
            );
            $arg['meta_query'][] = array(
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key'     => '_sale_price_dates_from',
                        'value'   => $time,
                        'type'    => 'numeric',
                        'compare' => '<='
                    ),
                    array(
                        'key'     => '_sale_price_dates_from',
                        'value'   => '',
                        'compare' => '='
                    ),
                )
            );
            $arg['meta_query'][] = array(
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key'     => '_sale_price_dates_to',
                        'value'   => $time,
                        'type'    => 'numeric',
                        'compare' => '>='
                    ),
                    array(
                        'key'     => '_sale_price_dates_to',
                        'value'   => '',
                        'compare' => '='
                    ),
                )
            );
        } else if ($key == 'rating-from' && $option != '0') {
            $arg['meta_query'][] = array(
                'key'     => '_wc_average_rating',
                'value'   => intval($option),
                'type'    => 'numeric',
                'compare' => '>='
            );
        } else if ($key == 'review-from' && $option != '0') {
            $arg['meta_query'][] = array(
                'key'     => '_wc_review_count',
                'value'   => intval($option),
                'type'    => 'numeric',
                'compare' => '>='
            );
        } else if ($key == 'categories') {

            foreach ($option as $id) {
                $categories[] = intval($id);
            }

            $arg['tax_query'] = array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $categories,
                )
            );
        } else if ($key == 'price') {
//            $date = date_create();
//            $time =  date_timestamp_get($date);
//            if (array_key_exists('on-sale', $selected_filter_option) && $selected_filter_option['on-sale'] == '1') {
//                $arg['meta_query'][] = array(
//                    'key'     => '_sale_price',
//                    'value'   => intval($option['from']),
//                    'type'    => 'numeric',
//                    'compare' => '>='
//                );
//                $arg['meta_query'][] = array(
//                    'key'     => '_sale_price',
//                    'value'   => intval($option['to']),
//                    'type'    => 'numeric',
//                    'compare' => '<='
//                );
//            } else {
//                $arg['meta_query'][] = array(
//                    'relation' => 'OR',
//                    array(
//                        'relation' => 'AND',
//                        array(
//                            'key'     => '_sale_price',
//                            'value'   => '',
//                            'compare' => '!='
//                        ),
//                        array(
//                            'key'     => '_sale_price',
//                            'value'   => intval($option['from']),
//                            'type'    => 'numeric',
//                            'compare' => '>='
//                        ),
//                        array(
//                            'key'     => '_sale_price',
//                            'value'   => intval($option['to']),
//                            'type'    => 'numeric',
//                            'compare' => '<='
//                        ),
//                        array(
//                            'relation' => 'OR',
//                            array(
//                                'key'     => '_sale_price_dates_from',
//                                'value'   => $time,
//                                'type'    => 'numeric',
//                                'compare' => '<='
//                            ),
//                            array(
//                                'key'     => '_sale_price_dates_from',
//                                'value'   => '',
//                                'compare' => '='
//                            ),
//                        ),
//                        array(
//                            'relation' => 'OR',
//                            array(
//                                'key'     => '_sale_price_dates_to',
//                                'value'   => $time,
//                                'type'    => 'numeric',
//                                'compare' => '>='
//                            ),
//                            array(
//                                'key'     => '_sale_price_dates_to',
//                                'value'   => '',
//                                'compare' => '='
//                            ),
//                        )
//                    ),
//                    array(
//                        'relation' => 'AND',
//                        array(
//                            'key'     => '_regular_price',
//                            'value'   => intval($option['from']),
//                            'type'    => 'numeric',
//                            'compare' => '>='
//                        ),
//                        array(
//                            'key'     => '_regular_price',
//                            'value'   => intval($option['to']),
//                            'type'    => 'numeric',
//                            'compare' => '<='
//                        )
//                    )
//                );
//            }
        }
    }

//    $my_query = new \WP_Query( $arg );
//
//    $wp_query = null;
//    $wp_query = $my_query;
//
//    var_dump($wp_query->request);

    global $wpdb;

    $query_args = array( 'meta_query' => array(
        'relation' => 'OR',
        array(
            'key' => 'foo_key',
        ),
        array(
            'key' => 'bar_key',
        ),
    ) );
    $meta_query = new \WP_Meta_Query();
    $meta_query->parse_query_vars( $query_args );
    $mq_sql = $meta_query->get_sql(
        'post',
        $wpdb->posts,
        'ID',
        null
    );
    var_dump($mq_sql);
}
