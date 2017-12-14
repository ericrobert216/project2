<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */
?>

<?php
    $array_multi_number = \Zoo\Admin\Setting\FilterSetting\prepare_multi_number();
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Filter Setting</h1>
    <hr class="wp-header-end">
    <div class="item-liquid-left">
        <div id="items-left">
            <div id="available-items" class="items-holder-wrap ui-droppable">
                <div class="sidebar-name">
                    <div class="sidebar-name-arrow"><br></div>
                    <h2>Available Filter<span id="removing-item">Deactivate <span></span></span></h2>
                </div>
                <div class="item-holder">
                    <div class="sidebar-description">
                        <p class="description">To activate a filter drag it to a sidebar or click on it. To deactivate a item and delete its settings, drag it back.</p>
                    </div>
                    <div id="item-list">

                        <!--price-->
                        <?php //require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/price.php';?>

                        <!--attribute-->
                        <?php require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/attribute.php';?>

                        <!--categories-->
                        <?php //require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/categories.php';?>

                        <!--on sale-->
                        <?php //require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/on-sale.php';?>

                        <!--in stock-->
                        <?php //require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/in-stock.php';?>

                        <!--review-->
                        <?php //require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/review.php';?>

                        <!--rating-->
                        <?php //require_once ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/rating.php';?>

                    </div>
                    <br class="clear">
                </div>
                <br class="clear">
            </div>
        </div>
    </div>
    <div class="item-liquid-right">
        <div id="items-right" class="wp-clearfix">
            <div class="sidebars-column-1">
                <div class="items-holder-wrap">
                    <div id="sidebar-1" class="items-sortables ui-droppable ui-sortable">
                        <div class="sidebar-name">
                            <div class="sidebar-name-arrow"><br></div>
                            <h2>Active Filter<span class="spinner"></span></h2>
                        </div>
                        <div class="sidebar-description">
                            <p class="description">Add filter item here to to active it.</p>
                        </div>
<!--                        <div id="item-49_item-17" class="item">-->
<!--                            <div class="item-top">-->
<!--                                <div class="item-title-action">-->
<!--                                    <button type="button" class="item-action hide-if-no-js" aria-expanded="false">-->
<!--                                        <span class="screen-reader-text">Edit item: + Product Filter</span>-->
<!--                                        <span class="toggle-indicator" aria-hidden="true"></span>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="item-title ui-sortable-handle">-->
<!--                                    <h3>+ Product Filter<span class="in-item-title"></span></h3>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item-inside">-->
<!--                                <form method="post">-->
<!--                                    <div class="item-content">-->
<!--                                        <div>-->
<!--                                            <p class="item-box">-->
<!--                                                <label for="item-item-17-preset" class="item-label">Style :</label>-->
<!--                                                <select name="item-item[17][preset]" id="item-item-17-preset" class="widefat">-->
<!--                                                    <option value="pf_default_inline">Flat Inline</option>-->
<!--                                                    <option value="pf_default" selected="selected">Flat Block</option>-->
<!--                                                    <option value="pf_default_select">Flat Select</option>-->
<!--                                                </select>-->
<!--                                            </p>-->
<!--                                            <p class="item-box">-->
<!--                                                <label for="item-item-17-template" class="item-label">Preset :</label>-->
<!--                                                <select name="item-item[17][template]" id="item-item-17-template" class="widefat">-->
<!--                                                    <option value="default" selected="selected">Default</option>-->
<!--                                                </select>-->
<!--                                            </p>-->
<!--                                            <p class="item-box">-->
<!--                                                <label for="item-item-17-disable_overrides" class="item-label">Disable Overrides :</label>-->
<!--                                                <input name="item-item[17][disable_overrides]" id="item-item-17-disable_overrides" value="yes" type="checkbox">-->
<!--                                            </p>-->
<!--                                            <p class="item-box">-->
<!--                                                <label for="item-item-17-item_action" class="item-label">Widget Action URL :</label>-->
<!--                                                <input name="item-item[17][item_action]" id="item-item-17-item_action" value="" class="widefat" type="text"><br>-->
<!--                                                <small>Custom action is used if the item is not used in shop, product archives or pages with Product Filter shortcodes. This way you can redirect filtering to your shop page or a custom page. Enter URL to redirect. For example your shop page URL</small>-->
<!--                                            </p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <input name="item-id" class="item-id" value="item-17" type="hidden">-->
<!--                                    <input name="id_base" class="id_base" value="item" type="hidden">-->
<!--                                    <input name="item-width" class="item-width" value="250" type="hidden">-->
<!--                                    <input name="item-height" class="item-height" value="200" type="hidden">-->
<!--                                    <input name="item_number" class="item_number" value="17" type="hidden">-->
<!--                                    <input name="multi_number" class="multi_number" value="" type="hidden">-->
<!--                                    <input name="add_new" class="add_new" value="" type="hidden">-->
<!--                                    <div class="item-control-actions">-->
<!--                                        <div class="alignleft">-->
<!--                                            <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |-->
<!--                                            <button type="button" class="button-link item-control-close">Close</button>-->
<!--                                        </div>-->
<!--                                        <div class="alignright">-->
<!--                                            <input name="saveitem" id="item-item-17-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>-->
<!--                                        </div>-->
<!--                                        <br class="clear">-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div class="item-description">-->
<!--                                Product Filter item version.-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="item" style="" id="attribute-2">-->
<!--                            <div class="item-top">-->
<!--                                <div class="item-title-action">-->
<!--                                    <button type="button" class="item-action hide-if-no-js" aria-expanded="false">-->
<!--                                        <span class="toggle-indicator" aria-hidden="true"></span>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="item-title ui-draggable-handle ui-sortable-handle">-->
<!--                                    <h3>+ Attribute<span class="in-item-title"></span></h3>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="item-inside" style="display: none;">-->
<!--                                <form method="post">-->
<!--                                    <div class="item-content">-->
<!--                                        <p>-->
<!--                                            <label for="attribute-2-title">Title</label>-->
<!--                                            <input class="widefat " id="attribute-2-title" name="attribute[2][title]" value="Active filters" type="text">-->
<!--                                        </p>-->
<!--                                        <p>-->
<!--                                            <label for="attribute-2-attribute-ids">Display type</label>-->
<!--                                            <select class="widefat " id="attribute-2-attribute-ids" name="attribute[2][attribute-ids]">-->
<!--                                                <option value="attribute-1">Attribute 1</option>-->
<!--                                                <option value="attribute-2">Attribute 2</option>-->
<!--                                                <option value="attribute-3">Attribute 3</option>-->
<!--                                                <option value="attribute-4">Attribute 4</option>-->
<!--                                                <option value="attribute-5">Attribute 5</option>-->
<!--                                                <option value="attribute-6">Attribute 6</option>-->
<!--                                                <option value="attribute-7">Attribute 7</option>-->
<!--                                                <option value="attribute-8">Attribute 8</option>-->
<!--                                                <option value="attribute-9">Attribute 9</option>-->
<!--                                                <option value="attribute-10">Attribute 10</option>-->
<!--                                                <option value="attribute-11">Attribute 11</option>-->
<!--                                                <option value="attribute-12">Attribute 12</option>-->
<!--                                            </select>-->
<!--                                        </p>-->
<!--                                        <p>-->
<!--                                            <label for="attribute-2-attribute-options">Display type</label>-->
<!--                                            <select class="widefat " id="attribute-2-attribute-options" name="attribute[2][attribute-options]" size="4" multiple="">-->
<!--                                                <option value="option-1" selected="">Option 1</option>-->
<!--                                                <option value="option-2">Option 2</option>-->
<!--                                                <option value="option-3">Option 3</option>-->
<!--                                                <option value="option-4">Option 4</option>-->
<!--                                                <option value="option-5">Option 5</option>-->
<!--                                                <option value="option-6">Option 6</option>-->
<!--                                                <option value="option-7">Option 7</option>-->
<!--                                                <option value="option-8">Option 8</option>-->
<!--                                                <option value="option-9">Option 9</option>-->
<!--                                                <option value="option-10">Option 10</option>-->
<!--                                                <option value="option-11">Option 11</option>-->
<!--                                                <option value="option-12">Option 12</option>-->
<!--                                            </select>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                    <input name="item-id" class="item-id" value="attribute-2" type="hidden">-->
<!--                                    <input name="item-type" class="item-type" value="attribute" type="hidden">-->
<!--                                    <input name="id_base" class="id_base" value="attribute" type="hidden">-->
<!--                                    <input name="item-width" class="item-width" value="250" type="hidden">-->
<!--                                    <input name="item-height" class="item-height" value="200" type="hidden">-->
<!--                                    <input name="item_number" class="item_number" value="1" type="hidden">-->
<!--                                    <input name="multi_number" class="multi_number" value="1" type="hidden">-->
<!--                                    <input name="add_new" class="add_new" value="" type="hidden">-->
<!--                                    <div class="item-control-actions">-->
<!--                                        <div class="alignleft">-->
<!--                                            <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |-->
<!--                                            <button type="button" class="button-link item-control-close">Close</button>-->
<!--                                        </div>-->
<!--                                        <div class="alignright">-->
<!--                                            <input name="saveitem" id="attribute-2-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>-->
<!--                                        </div>-->
<!--                                        <br class="clear">-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div class="item-description" style="display: none;">-->
<!--                                Description here.-->
<!--                            </div>-->
<!--                        </div>-->


                        <?php
                            $data = \Zoo\Admin\Setting\FilterSetting\prepare_data();

                            //var_dump($data);


                            foreach ($data as $item_data) {
                                if ($item_data['item_type'] == 'attribute') {
                                    require ZOO_LN_TEMPLATES_PATH.'admin/filter-setting/attribute.php';
                                }
                            }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post">
        <input id="_wpnonce_items" name="_wpnonce_items" value="b04e940eeb" type="hidden">
        <?php wp_nonce_field( 'filter_setting', 'zoo_ln_nonce_setting' ); ?>
    </form>
    <br class="clear">
</div>

<div class="items-chooser" style="display: none;">
    <ul class="items-chooser-sidebars">
    </ul>
    <div class="items-chooser-actions">
        <button class="button items-chooser-cancel">Cancel</button>
        <button class="button button-primary items-chooser-add">Add Widget</button>
    </div>
</div>