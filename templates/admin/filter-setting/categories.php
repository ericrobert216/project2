<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:45 PM
 */
?>

<div id="widget-3_item-__i__" class="widget ui-draggable">
    <div class="widget-top">
        <div class="widget-title-action">
            <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="widget-title ui-draggable-handle">
            <h3>Categories<span class="in-widget-title"></span></h3>
        </div>
    </div>
    <div class="widget-inside">
        <form method="post">
            <div class="widget-content">
                <p>
                    <label for="widget-item-__i__-title">Title</label>
                    <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
                </p>
                <p>
                    <label for="widget-item-__i__-category-ids">Display type</label>
                    <select class="widefat " id="widget-item-__i__-category-ids" name="widget-item[__i__][category-ids]" size="4" multiple>
                        <option value="cate1">Category 1</option>
                        <option value="cate2">Category 2</option>
                        <option value="cate3">Category 3</option>
                        <option value="cate4">Category 4</option>
                        <option value="cate5">Category 5</option>
                        <option value="cate6">Category 6</option>
                        <option value="cate7">Category 7</option>
                        <option value="cate8">Category 8</option>
                        <option value="cate9">Category 9</option>
                        <option value="cate10">Category 10</option>
                        <option value="cate11">Category 11</option>
                        <option value="cate12">Category 12</option>
                    </select>
                </p>
                <p>
                    <input class="checkbox " id="widget-item-__i__-price-hide-empty-ranges" name="widget-nm_woocommerce_price_filter[__i__][price-hide-empty-ranges]" type="checkbox" value="1" checked="checked">
                    <label for="widget-item-__i__-price-hide-empty-ranges">Hide empty categories</label>
                </p>
            </div>
            <input name="widget-id" class="widget-id" value="item-__i__" type="hidden">
            <input name="id_base" class="id_base" value="item" type="hidden">
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
                    <input name="savewidget" id="widget-item-__i__-savewidget" class="button button-primary widget-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="widget-description">
        Description here.
    </div>
</div>
