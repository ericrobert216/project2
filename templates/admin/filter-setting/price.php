<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:39 PM
 */
?>

<div id="widget-1_price-__i__" class="widget ui-draggable">
    <div class="widget-top">
        <div class="widget-title-action">
            <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="widget-title ui-draggable-handle">
            <h3>Price<span class="in-widget-title"></span></h3>
        </div>
    </div>
    <div class="widget-inside">
        <form method="post">
            <div class="widget-content">
                <p>
                    <label for="widget-price-__i__-title">Title</label>
                    <input class="widefat " id="widget-price-__i__-title" name="widget-price[__i__][title]" value="Active filters" type="text">
                </p>
                <p>
                    <label for="widget-price-__i__-display-type">Display type</label>
                    <select class="widefat " id="widget-price-__i__-display-type" name="widget-price[__i__][display-type]">
                        <option value="ratio">Ratio</option>
                        <option value="slider">Slider</option>
                    </select>
                </p>
                <p>
                    <label for="widget-price-__i__-price-slider-from">Price from</label>
                    <input class="widefat " id="widget-price-__i__-price-slider-from" name="widget-price[__i__][price-slider-from]" type="number" step="1" min="1" max="" value="0">
                </p>
                <p>
                    <label for="widget-price-__i__-price-slider-to">Price to</label>
                    <input class="widefat " id="widget-price-__i__-price-slider-from" name="widget-price[__i__][price-slider-from]" type="number" step="1" min="1" max="" value="1000">
                </p>
                <p>
                    <label for="widget-price-__i__-price-range-size">Price range size</label>
                    <input class="widefat " id="widget-price-__i__-price-range-size" name="widget-price[__i__][price-range-size]" type="number" step="1" min="1" max="" value="50">
                </p>
                <p>
                    <label for="widget-price-__i__-price-max-range">Price range size</label>
                    <input class="widefat " id="widget-price-__i__-price-max-range" name="widget-price[__i__][price-max-range]" type="number" step="1" min="1" max="" value="10">
                </p>
                <p>
                    <input class="checkbox " id="widget-price-__i__-price-hide-empty-ranges" name="widget-nm_woocommerce_price_filter[__i__][price-hide-empty-ranges]" type="checkbox" value="1" checked="checked">
                    <label for="widget-price-__i__-price-hide-empty-ranges">Hide empty price ranges</label>
                </p>
            </div>
            <input name="widget-id" class="widget-id" value="price-__i__" type="hidden">
            <input name="id_base" class="id_base" value="price" type="hidden">
            <input name="widget-width" class="widget-width" value="250" type="hidden">
            <input name="widget-height" class="widget-height" value="200" type="hidden">
            <input name="widget_number" class="widget_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="2" type="hidden">
            <input name="add_new" class="add_new" value="multi" type="hidden">
            <div class="widget-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete widget-control-remove">Delete</button> |
                    <button type="button" class="button-link widget-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="savewidget" id="widget-price-__i__-savewidget" class="button button-primary widget-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="widget-description">
        Description here.
    </div>
</div>
