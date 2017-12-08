<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:44 PM
 */
?>

<div id="attribute-__i__" class="item ui-draggable">
    <div class="item-top">
        <div class="item-title-action">
            <button type="button" class="item-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="item-title ui-draggable-handle">
            <h3>+ Attribute<span class="in-item-title"></span></h3>
        </div>
    </div>
    <div class="item-inside">
        <form method="post">
            <div class="item-content">
                <p>
                    <label for="attribute-__i__-title">Title</label>
                    <input class="widefat " id="attribute-__i__-title" name="attribute[__i__][title]" value="Active filters" type="text">
                </p>
                <p>
                    <label for="attribute-__i__-attribute-ids">Display type</label>
                    <select class="widefat " id="attribute-__i__-attribute-ids" name="attribute[__i__][attribute-ids]">
                        <option value="attribute-1">Attribute 1</option>
                        <option value="attribute-2">Attribute 2</option>
                        <option value="attribute-3">Attribute 3</option>
                        <option value="attribute-4">Attribute 4</option>
                        <option value="attribute-5">Attribute 5</option>
                        <option value="attribute-6">Attribute 6</option>
                        <option value="attribute-7">Attribute 7</option>
                        <option value="attribute-8">Attribute 8</option>
                        <option value="attribute-9">Attribute 9</option>
                        <option value="attribute-10">Attribute 10</option>
                        <option value="attribute-11">Attribute 11</option>
                        <option value="attribute-12">Attribute 12</option>
                    </select>
                </p>
                <p>
                    <label for="attribute-__i__-attribute-options">Display type</label>
                    <select class="widefat " id="attribute-__i__-attribute-options" name="attribute[__i__][attribute-options]" size="4" multiple>
                        <option value="option-1" selected>Option 1</option>
                        <option value="option-2">Option 2</option>
                        <option value="option-3">Option 3</option>
                        <option value="option-4">Option 4</option>
                        <option value="option-5">Option 5</option>
                        <option value="option-6">Option 6</option>
                        <option value="option-7">Option 7</option>
                        <option value="option-8">Option 8</option>
                        <option value="option-9">Option 9</option>
                        <option value="option-10">Option 10</option>
                        <option value="option-11">Option 11</option>
                        <option value="option-12">Option 12</option>
                    </select>
                </p>
            </div>
            <input name="item-id" class="item-id" value="attribute-__i__" type="hidden">
            <input name="item-type" class="item-type" value="attribute" type="hidden">
            <input name="id_base" class="id_base" value="attribute" type="hidden">
            <input name="item-width" class="item-width" value="250" type="hidden">
            <input name="item-height" class="item-height" value="200" type="hidden">
            <input name="item_number" class="item_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="1" type="hidden">
            <input name="add_new" class="add_new" value="multi" type="hidden">
            <div class="item-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |
                    <button type="button" class="button-link item-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="saveitem" id="attribute-__i__-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
