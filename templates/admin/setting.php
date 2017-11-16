<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */
?>

<script src="<?php echo (ZOO_LN_JSPATH.'jquery.js')?>"></script>
<script src="<?php echo (ZOO_LN_JSPATH.'jquery-ui.min.js')?>"></script>
<script src="<?php echo (ZOO_LN_JSPATH.'admin/items.js')?>"></script>


<link rel="stylesheet" href="<?php echo (ZOO_LN_CSSPATH.'bootstrap.min.css')?>">


<form action="" method="post">
    First name:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse">
    <br><br>

    <input type="submit" value="Submit">
    <?php wp_nonce_field( 'save_setting', 'zoo_ln_nonce_setting' ); ?>
</form>

<div class="wrap">
    <h1 class="wp-heading-inline">Widgets</h1>
    <hr class="wp-header-end">
    <div class="widget-liquid-left">
        <div id="widgets-left">
            <div id="available-widgets" class="widgets-holder-wrap ui-droppable">
                <div class="sidebar-name">
                    <div class="sidebar-name-arrow"><br></div>
                    <h2>Available Widgets <span id="removing-widget">Deactivate <span></span></span></h2>
                </div>
                <div class="widget-holder">
                    <div class="sidebar-description">
                        <p class="description">To activate a widget drag it to a sidebar or click on it. To deactivate a widget and delete its settings, drag it back.</p>
                    </div>
                    <div id="widget-list">

                        <!--price-->
                        <div id="widget-3_item-__i__" class="widget ui-draggable">
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
                                            <label for="widget-item-__i__-title">Title</label>
                                            <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
                                        </p>
                                        <p>
                                            <label for="widget-item-__i__-display-type">Display type</label>
                                            <select class="widefat " id="widget-item-__i__-display-type" name="widget-item[__i__][display-type]">
                                                <option value="ratio">Ratio</option>
                                                <option value="slider">Slider</option>
                                            </select>
                                        </p>
                                        <p>
                                            <label for="widget-item-__i__-price-slider-from">Price from</label>
                                            <input class="widefat " id="widget-item-__i__-price-slider-from" name="widget-item[__i__][price-slider-from]" type="number" step="1" min="1" max="" value="0">
                                        </p>
                                        <p>
                                            <label for="widget-item-__i__-price-slider-to">Price to</label>
                                            <input class="widefat " id="widget-item-__i__-price-slider-from" name="widget-item[__i__][price-slider-from]" type="number" step="1" min="1" max="" value="1000">
                                        </p>
                                        <p>
                                            <label for="widget-item-__i__-price-range-size">Price range size</label>
                                            <input class="widefat " id="widget-item-__i__-price-range-size" name="widget-item[__i__][price-range-size]" type="number" step="1" min="1" max="" value="50">
                                        </p>
                                        <p>
                                            <label for="widget-item-__i__-price-max-range">Price range size</label>
                                            <input class="widefat " id="widget-item-__i__-price-max-range" name="widget-item[__i__][price-max-range]" type="number" step="1" min="1" max="" value="10">
                                        </p>
                                        <p>
                                            <input class="checkbox " id="widget-item-__i__-price-hide-empty-ranges" name="widget-nm_woocommerce_price_filter[__i__][price-hide-empty-ranges]" type="checkbox" value="1" checked="checked">
                                            <label for="widget-item-__i__-price-hide-empty-ranges">Hide empty price ranges</label>
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

                        <!--new-->
                        <div id="widget-3_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>New<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <p>
                                            <label for="widget-item-__i__-title">Title</label>
                                            <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
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

                        <!--categories-->
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

                        <!--on sale-->
                        <div id="widget-3_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>On Sale<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <p>
                                            <label for="widget-item-__i__-title">Title</label>
                                            <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
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

                        <!--in stock-->
                        <div id="widget-3_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>In Stock<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <p>
                                            <label for="widget-item-__i__-title">Title</label>
                                            <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
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

                        <!--attribute-->
                        <div id="widget-3_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>+ Attribute<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <p>
                                            <label for="widget-item-__i__-title">Title</label>
                                            <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
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

                        <!--review-->
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

                        <!--rating-->
                        <div id="widget-3_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>Rating<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <p>
                                            <label for="widget-item-__i__-title">Title</label>
                                            <input class="widefat " id="widget-item-__i__-title" name="widget-item[__i__][title]" value="Active filters" type="text">
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
                    </div>
                    <br class="clear">
                </div>
                <br class="clear">
            </div>
        </div>
    </div>
    <div class="widget-liquid-right">
        <div id="widgets-right" class="wp-clearfix">
            <div class="sidebars-column-1">
                <div class="widgets-holder-wrap">
                    <div id="sidebar-1" class="widgets-sortables ui-droppable ui-sortable">
                        <div class="sidebar-name">
                            <div class="sidebar-name-arrow"><br></div>
                            <h2>Blog Sidebar <span class="spinner"></span></h2>
                        </div>
                        <div class="sidebar-description">
                            <p class="description">Add widgets here to appear in your sidebar on blog posts and archive pages.</p>
                        </div>
                        <div id="widget-49_item-17" class="widget">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="screen-reader-text">Edit widget: + Product Filter</span>
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="widget-title ui-sortable-handle">
                                    <h3>+ Product Filter<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <div>
                                            <p class="item-box">
                                                <label for="widget-item-17-preset" class="item-label">Style :</label>
                                                <select name="widget-item[17][preset]" id="widget-item-17-preset" class="widefat">
                                                    <option value="pf_default_inline">Flat Inline</option>
                                                    <option value="pf_default" selected="selected">Flat Block</option>
                                                    <option value="pf_default_select">Flat Select</option>
                                                </select>
                                            </p>
                                            <p class="item-box">
                                                <label for="widget-item-17-template" class="item-label">Preset :</label>
                                                <select name="widget-item[17][template]" id="widget-item-17-template" class="widefat">
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </p>
                                            <p class="item-box">
                                                <label for="widget-item-17-disable_overrides" class="item-label">Disable Overrides :</label>
                                                <input name="widget-item[17][disable_overrides]" id="widget-item-17-disable_overrides" value="yes" type="checkbox">
                                            </p>
                                            <p class="item-box">
                                                <label for="widget-item-17-widget_action" class="item-label">Widget Action URL :</label>
                                                <input name="widget-item[17][widget_action]" id="widget-item-17-widget_action" value="" class="widefat" type="text"><br>
                                                <small>Custom action is used if the widget is not used in shop, product archives or pages with Product Filter shortcodes. This way you can redirect filtering to your shop page or a custom page. Enter URL to redirect. For example your shop page URL</small>
                                            </p>
                                        </div>
                                    </div>
                                    <input name="widget-id" class="widget-id" value="item-17" type="hidden">
                                    <input name="id_base" class="id_base" value="item" type="hidden">
                                    <input name="widget-width" class="widget-width" value="250" type="hidden">
                                    <input name="widget-height" class="widget-height" value="200" type="hidden">
                                    <input name="widget_number" class="widget_number" value="17" type="hidden">
                                    <input name="multi_number" class="multi_number" value="" type="hidden">
                                    <input name="add_new" class="add_new" value="" type="hidden">
                                    <div class="widget-control-actions">
                                        <div class="alignleft">
                                            <button type="button" class="button-link button-link-delete widget-control-remove">Delete</button> |
                                            <button type="button" class="button-link widget-control-close">Close</button>
                                        </div>
                                        <div class="alignright">
                                            <input name="savewidget" id="widget-item-17-savewidget" class="button button-primary widget-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                                        </div>
                                        <br class="clear">
                                    </div>
                                </form>
                            </div>
                            <div class="widget-description">
                                Product Filter widget version.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post">
        <input id="_wpnonce_widgets" name="_wpnonce_widgets" value="b04e940eeb" type="hidden">
    </form>
    <br class="clear">
</div>