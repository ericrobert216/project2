<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:15 PM
 */

?>


<div>
    <form action="" method="post">
        <ul>
            <li>
                <h4>Price</h4>
                <span>from:</span>
                <input class="" id="" name="price-from" value="0" type="text">
                <span>to:</span>
                <input class="" id="" name="price-to" value="100" type="text">
            </li>
            <li>
                <h4>Categories:</h4>

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

                        echo '<label><input type="checkbox" class="radio" value="'.$category_id.'" name="categories" />'.$cat->name.'</label><br />';

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
                                echo  $sub_category->name ;
                                echo '<br /><label><input type="checkbox" class="radio" value="'.$sub_category->term_id.'" name="categories" />'.$sub_category->name.'</label>';
                            }
                        }
                    }
                }
                ?>

            </li>
            <li>
                <h4>On Sale:</h4>
                <label><input type="checkbox" class="radio" value="1" name="on-sale" />Show On Sale only</label>
            </li>
            <li>
                <h4>In Stock:</h4>
                <label><input type="checkbox" class="radio" value="1" name="on-sale" />Show in stock product only</label>
            </li>
            <li>
                <h4>Review</h4>
                <span>from:</span>
                <input class="" id="" name="review-from" value="0" type="text">
            </li>
            <li>
                <h4>Rating</h4>
                <span>from:</span>
                <input class="" id="" name="rating-from" value="0" type="text">
            </li>
        </ul>
        <input type="submit" value="Apply">
        <?php wp_nonce_field( 'filter_style', 'zoo_ln_nonce_setting' ); ?>
    </form>
</div>
