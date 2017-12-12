<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:45 PM
 */
?>

<div id="item-3_item-__i__" class="item ui-draggable">
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
                    <label for="item-item-__i__-title">Title</label>
                    <input class="widefat " id="item-item-__i__-title" name="item-item[__i__][title]" value="Active filters" type="text">
                </p>
                <p>
                    <label for="item-item-__i__-category-ids">Display type</label>
                    <select class="widefat " id="item-item-__i__-category-ids" name="item-item[__i__][category-ids]" size="4" multiple>
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
                    <input class="checkbox " id="item-item-__i__-price-hide-empty-ranges" name="item-nm_woocommerce_price_filter[__i__][price-hide-empty-ranges]" type="checkbox" value="1" checked="checked">
                    <label for="item-item-__i__-price-hide-empty-ranges">Hide empty categories</label>
                </p>
            </div>
            <input name="item-id" class="item-id" value="item-__i__" type="hidden">
            <input name="id_base" class="id_base" value="item" type="hidden">
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
                    <input name="saveitem" id="item-item-__i__-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
