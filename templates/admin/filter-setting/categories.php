<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:45 PM
 */
?>

<?php
    $item_type = 'categories';
    $add_new = 'multi';
    $content_title = '';

    if (isset($item_data)) {
        $item_number = $item_data['item_number'];
        $sac = (array)reset($item_data['item_config_value']['filter_config_value']);
        $content_title = $sac['title'];
//        $content_title = $sac['title'];
//        category-ids
        $add_new = '';
    } else {
        $item_number = '__i__';
    }

    if (isset($array_multi_number[$item_type])) {
        $multi_number = $array_multi_number[$item_type];
    } else {
        $multi_number = 1;
    }

    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no
    $title        = '';
    $empty        = 0;

    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );
    $all_categories = get_categories( $args );

//    foreach ($all_categories as $cat) {
//        if($cat->category_parent == 0) {
//            $category_id = $cat->term_id;
//
//            echo '<label><input type="checkbox" class="radio" value="'.$category_id.'" name="categories" />'.$cat->name.'</label><br />';
//
//            $args2 = array(
//                'taxonomy'     => $taxonomy,
//                'child_of'     => 0,
//                'parent'       => $category_id,
//                'orderby'      => $orderby,
//                'show_count'   => $show_count,
//                'pad_counts'   => $pad_counts,
//                'hierarchical' => $hierarchical,
//                'title_li'     => $title,
//                'hide_empty'   => $empty
//            );
//            $sub_cats = get_categories( $args2 );
//
//            if($sub_cats) {
//                foreach($sub_cats as $sub_category) {
//                    echo  $sub_category->name ;
//                    echo '<br /><label><input type="checkbox" class="radio" value="'.$sub_category->term_id.'" name="categories" />'.$sub_category->name.'</label>';
//                }
//            }
//        }
//    }
?>

<div id="categories-<?php echo($item_number);?>" class="item ui-draggable">
    <div class="item-top">
        <div class="item-title-action">
            <button type="button" class="item-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="item-title ui-draggable-handle">
            <h3>Categories<span class="in-item-title"></span></h3>
        </div>
    </div>
    <div class="item-inside">
        <form method="post">
            <div class="item-content">
                <p>
                    <label for="categories-<?php echo($item_number);?>-title">Title</label>
                    <input class="widefat " id="categories-<?php echo($item_number);?>-title" name="categories[<?php echo($item_number);?>][title]" value="<?php echo($content_title);?>" type="text">
                </p>
                <p>
                    <label for="categories-<?php echo($item_number);?>-category-ids">Display type</label>
                    <select class="widefat " id="categories-<?php echo($item_number);?>-category-ids" name="categories[<?php echo($item_number);?>][category-ids]" size="4" multiple>
                        <?php
                        foreach ($all_categories as $cat) {
                            if($cat->category_parent == 0) {
                                $category_id = $cat->term_id;
                                echo ('<option value="'.$category_id.'">'.$cat->name.'</option>');
                                $args2 = array(
                                    'taxonomy'     => $taxonomy,
                                    'child_of'     => 0,
                                    'parent'       => $category_id,
                                    'orderby'      => $orderby,
                                    'show_count'   => $show_count,
                                    'pad_counts'   => $pad_counts,
                                    'hierarchical' => $hierarchical,
                                    'title_li'     => $title,
                                    'hide_empty'   => $empty
                                );
                                $sub_cats = get_categories( $args2 );
                                if($sub_cats) {
                                    foreach($sub_cats as $sub_category) {
                                        echo ('<option value="'.$sub_category->term_id.'">'.$sub_category->name.'</option>');
                                    }
                                }
                            }
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <input class="checkbox " id="categories-<?php echo($item_number);?>-price-hide-empty-ranges" name="item-nm_woocommerce_price_filter[<?php echo($item_number);?>][price-hide-empty-ranges]" type="checkbox" value="1" checked="checked">
                    <label for="categories-<?php echo($item_number);?>-price-hide-empty-ranges">Hide empty categories</label>
                </p>
            </div>
            <input name="item-id" class="item-id" value="categories-<?php echo($item_number);?>" type="hidden">
            <input name="id_base" class="id_base" value="categories" type="hidden">
            <input name="item-type" class="item-type" value="<?php echo($item_type);?>" type="hidden">
            <input name="item-width" class="item-width" value="250" type="hidden">
            <input name="item-height" class="item-height" value="200" type="hidden">
            <input name="item_number" class="item_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="<?php echo($multi_number)?>" type="hidden"><!--no. of multi item-->
            <input name="add_new" class="add_new" value="<?php echo($add_new);?>" type="hidden">
            <div class="item-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |
                    <button type="button" class="button-link item-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="saveitem" id="categories-<?php echo($item_number);?>-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
