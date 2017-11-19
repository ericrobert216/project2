<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:46 PM
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
            <h3>Review<span class="in-widget-title"></span></h3>
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
                    <label for="widget-item-__i__-review-slider-from">No review from</label>
                    <input class="widefat " id="widget-item-__i__-review-slider-from" name="widget-item[__i__][review-slider-from]" type="number" step="1" min="1" max="" value="0">
                </p>
                <p>
                    <label for="widget-item-__i__-review-slider-to">No review to</label>
                    <input class="widefat " id="widget-item-__i__-review-slider-from" name="widget-item[__i__][review-slider-from]" type="number" step="1" min="1" max="" value="100">
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
