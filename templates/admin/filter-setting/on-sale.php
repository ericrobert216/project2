<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:45 PM
 */
?>

<div id="item-3_on_sale-__i__" class="item ui-draggable">
    <div class="item-top">
        <div class="item-title-action">
            <button type="button" class="item-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="item-title ui-draggable-handle">
            <h3>On Sale<span class="in-item-title"></span></h3>
        </div>
    </div>
    <div class="item-inside">
        <form method="post">
            <div class="item-content">
                <p>
                    <label for="item-on_sale-__i__-title">Title</label>
                    <input class="widefat " id="item-on_sale-__i__-title" name="item-on_sale[__i__][title]" value="Active filters" type="text">
                </p>
            </div>
            <input name="item-id" class="item-id" value="on_sale-__i__" type="hidden">
            <input name="id_base" class="id_base" value="on_sale" type="hidden">
            <input name="item-width" class="item-width" value="250" type="hidden">
            <input name="item-height" class="item-height" value="200" type="hidden">
            <input name="item_number" class="item_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="1" type="hidden"><!--no. of multi item-->
            <input name="add_new" class="add_new" value="multi" type="hidden">
            <div class="item-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |
                    <button type="button" class="button-link item-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="saveitem" id="item-on_sale-__i__-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
