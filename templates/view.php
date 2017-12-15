<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:15 PM
 */

$data = \Zoo\Frontend\Hook\prepare_data();
?>


<div>
    <form action="" method="post">
        <ul>
            <?php
            foreach ($data as $item_data) :
                $content_data = (array)reset($item_data['item_config_value']['filter_config_value']);
            ?>
                <?php if ($item_data['item_type'] == 'price'): ?>
                    <li>
                        <h4><?php echo($content_data['title']);?>:</h4>
                        <span>from:</span>
                        <input class="" id="" name="price[from]" value="0" type="text">
                        <span>to:</span>
                        <input class="" id="" name="price[to]" value="100" type="text">
                    </li>
                <?php elseif ($item_data['item_type'] == 'categories'):?>
                    <li>
                        <h4><?php echo($content_data['title']);?>:</h4>

                        <?php
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

                        foreach ($all_categories as $cat) {
                            if($cat->category_parent == 0) {
                                $category_id = $cat->term_id;

                                if (in_array($category_id,$content_data['category-ids'])) {
                                    echo '<label><input type="checkbox" class="radio" value="'.$category_id.'" name="categories[]" />'.$cat->name.'</label><br />';

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
                                            if (in_array($sub_category->term_id,$content_data['category-ids'])) {
                                                echo '<br /><label><input type="checkbox" class="radio" value="'.$sub_category->term_id.'" name="categories[]" />'.$sub_category->name.'</label>';
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        ?>

                    </li>
                <?php elseif ($item_data['item_type'] == 'on-sale'):?>
                    <li>
                        <h4>On Sale:</h4>
                        <label><input type="checkbox" class="radio" value="1" name="on-sale" />Show On Sale only</label>
                    </li>
                <?php elseif ($item_data['item_type'] == 'in-stock'):?>
                    <li>
                        <h4><?php echo($content_data['title']);?>:</h4>
                        <?php
                            if (isset($selected_filter_option['in-stock']) && $selected_filter_option['in-stock'] == '1') $checked = 'checked';
                            else $checked = '';
                        ?>
                        <label><input type="checkbox" class="radio" value="1" name="in-stock" <?php echo($checked);?>/>Show in stock product only</label>
                    </li>
                <?php elseif ($item_data['item_type'] == 'review'):?>
                    <li>
                        <h4>Review</h4>
                        <span>from:</span>
                        <input class="" id="" name="review-from" value="0" type="text">
                    </li>
                <?php elseif ($item_data['item_type'] == 'rating'):?>
                    <li>
                        <h4>Rating</h4>
                        <span>from:</span>
                        <input class="" id="" name="rating-from" value="0" type="text">
                    </li>
                <?php endif;?>
            <?php
            endforeach;
            ?>
        </ul>
        <input type="submit" value="Apply">
        <?php wp_nonce_field( 'filter_style', 'zoo_ln_nonce_setting' ); ?>
    </form>
</div>
