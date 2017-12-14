<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:39 PM
 */
?>

<?php
    $item_type = 'price';
    $add_new = 'multi';
    $content_title = '';
    $display_type = '';
    $price_slider_from = 0;
    $price_slider_to = 1000;
    $price_range_size = 50;
    $price_max_range = 10;
    $price_hide_empty_ranges = 0;

    if (isset($item_data)) {
        $item_number = $item_data['item_number'];
        $sac = (array)reset($item_data['item_config_value']['filter_config_value']);
        $content_title = $sac['title'];
        $display_type = $sac['display-type'];
        $price_slider_from = $sac['price-slider-from'];
        $price_slider_to = $sac['price-slider-to'];
        $price_range_size = $sac['price-range-size'];
        $price_max_range = $sac['price-max-range'];
        if (isset($sac['price-hide-empty-ranges'])) {
            $price_hide_empty_ranges = $sac['price-hide-empty-ranges'];
        }

        $add_new = '';
    } else {
        $item_number = '__i__';
    }

    if (isset($array_multi_number[$item_type])) {
        $multi_number = $array_multi_number[$item_type];
    } else {
        $multi_number = 1;
    }
?>

<div id="price-<?php echo($item_number);?>" class="item ui-draggable">
    <div class="item-top">
        <div class="item-title-action">
            <button type="button" class="item-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="item-title ui-draggable-handle">
            <h3>Price<span class="in-item-title"></span></h3>
        </div>
    </div>
    <div class="item-inside">
        <form method="post">
            <div class="item-content">
                <p>
                    <label for="price-<?php echo($item_number);?>-title">Title</label>
                    <input class="widefat " id="price-<?php echo($item_number);?>-title" name="price[<?php echo($item_number);?>][title]" value="<?php echo($content_title);?>" type="text">
                </p>
                <p>
                    <label for="price-<?php echo($item_number);?>-display-type">Display type</label>
                    <select class="widefat " id="price-<?php echo($item_number);?>-display-type" name="price[<?php echo($item_number);?>][display-type]">
                        <option value="ratio" <?php selected($display_type,'ratio');?>>Ratio</option>
                        <option value="slider" <?php selected($display_type,'slider');?>>Slider</option>
                    </select>
                </p>
                <p>
                    <label for="price-<?php echo($item_number);?>-price-slider-from">Price from</label>
                    <input class="widefat " id="price-<?php echo($item_number);?>-price-slider-from" name="price[<?php echo($item_number);?>][price-slider-from]" type="number" step="1" min="1" max="" value="<?php echo($price_slider_from);?>">
                </p>
                <p>
                    <label for="price-<?php echo($item_number);?>-price-slider-to">Price to</label>
                    <input class="widefat " id="price-<?php echo($item_number);?>-price-slider-to" name="price[<?php echo($item_number);?>][price-slider-to]" type="number" step="1" min="1" max="" value="<?php echo($price_slider_to);?>">
                </p>
                <p>
                    <label for="price-<?php echo($item_number);?>-price-range-size">Price range size</label>
                    <input class="widefat " id="price-<?php echo($item_number);?>-price-range-size" name="price[<?php echo($item_number);?>][price-range-size]" type="number" step="1" min="1" max="" value="<?php echo($price_range_size);?>">
                </p>
                <p>
                    <label for="price-<?php echo($item_number);?>-price-max-range">Price range size</label>
                    <input class="widefat " id="price-<?php echo($item_number);?>-price-max-range" name="price[<?php echo($item_number);?>][price-max-range]" type="number" step="1" min="1" max="" value="<?php echo($price_max_range);?>">
                </p>
                <p>
                    <input class="checkbox " id="price-<?php echo($item_number);?>-price-hide-empty-ranges" name="price[<?php echo($item_number);?>][price-hide-empty-ranges]" type="checkbox" value="1" <?php checked($price_hide_empty_ranges, 1);?>>
                    <label for="price-<?php echo($item_number);?>-price-hide-empty-ranges">Hide empty price ranges</label>
                </p>
            </div>
            <input name="item-id" class="item-id" value="price-<?php echo($item_number);?>" type="hidden">
            <input name="id_base" class="id_base" value="price" type="hidden">
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
                    <input name="saveitem" id="price-<?php echo($item_number);?>-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
