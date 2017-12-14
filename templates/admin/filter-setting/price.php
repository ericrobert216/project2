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
?>

<div id="price-__i__" class="item ui-draggable">
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
                    <label for="price-__i__-title">Title</label>
                    <input class="widefat " id="price-__i__-title" name="price[__i__][title]" value="Active filters" type="text">
                </p>
                <p>
                    <label for="price-__i__-display-type">Display type</label>
                    <select class="widefat " id="price-__i__-display-type" name="price[__i__][display-type]">
                        <option value="ratio">Ratio</option>
                        <option value="slider">Slider</option>
                    </select>
                </p>
                <p>
                    <label for="price-__i__-price-slider-from">Price from</label>
                    <input class="widefat " id="price-__i__-price-slider-from" name="price[__i__][price-slider-from]" type="number" step="1" min="1" max="" value="0">
                </p>
                <p>
                    <label for="price-__i__-price-slider-to">Price to</label>
                    <input class="widefat " id="price-__i__-price-slider-from" name="price[__i__][price-slider-from]" type="number" step="1" min="1" max="" value="1000">
                </p>
                <p>
                    <label for="price-__i__-price-range-size">Price range size</label>
                    <input class="widefat " id="price-__i__-price-range-size" name="price[__i__][price-range-size]" type="number" step="1" min="1" max="" value="50">
                </p>
                <p>
                    <label for="price-__i__-price-max-range">Price range size</label>
                    <input class="widefat " id="price-__i__-price-max-range" name="price[__i__][price-max-range]" type="number" step="1" min="1" max="" value="10">
                </p>
                <p>
                    <input class="checkbox " id="price-__i__-price-hide-empty-ranges" name="item-nm_woocommerce_price_filter[__i__][price-hide-empty-ranges]" type="checkbox" value="1" checked="checked">
                    <label for="price-__i__-price-hide-empty-ranges">Hide empty price ranges</label>
                </p>
            </div>
            <input name="item-id" class="item-id" value="price-__i__" type="hidden">
            <input name="id_base" class="id_base" value="price" type="hidden">
            <input name="item-type" class="item-type" value="<?php echo($item_type);?>" type="hidden">
            <input name="item-width" class="item-width" value="250" type="hidden">
            <input name="item-height" class="item-height" value="200" type="hidden">
            <input name="item_number" class="item_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="2" type="hidden">
            <input name="add_new" class="add_new" value="multi" type="hidden">
            <div class="item-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |
                    <button type="button" class="button-link item-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="saveitem" id="price-__i__-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
