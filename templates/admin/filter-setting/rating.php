<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:47 PM
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
            <h3>Rating<span class="in-item-title"></span></h3>
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
                    <label for="item-item-__i__-rating-slider-from">No rating from</label>
                    <input class="widefat " id="item-item-__i__-rating-slider-from" name="item-item[__i__][rating-slider-from]" type="number" step="1" min="1" max="" value="0">
                </p>
                <p>
                    <label for="item-item-__i__-rating-slider-to">No rating to</label>
                    <input class="widefat " id="item-item-__i__-review-slider-from" name="item-item[__i__][rating-slider-from]" type="number" step="1" min="1" max="" value="100">
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
