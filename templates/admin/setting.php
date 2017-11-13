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
                        <div id="widget-1_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="screen-reader-text">Edit widget: + Product Filter</span>
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                    <a class="widget-control-edit hide-if-js" href="/wp-admin/widgets.php?editwidget=item-8&amp;addnew=1&amp;num=18&amp;base=item">
                                        <span class="edit">Edit</span>
                                        <span class="add">Add</span>
                                        <span class="screen-reader-text">+ Product Filter</span>
                                    </a>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>+ Product Filter<span class="in-widget-title"></span></h3>
                                </div>
                            </div>
                            <div class="widget-inside">
                                <form method="post">
                                    <div class="widget-content">
                                        <div>
                                            <p class="item-box">
                                                <label for="widget-item-__i__-preset" class="item-label">Style :</label>
                                                <select name="widget-item[__i__][preset]" id="widget-item-__i__-preset" class="widefat">
                                                    <option value="pf_default_inline">Flat Inline</option>
                                                    <option value="pf_default" selected="selected">Flat Block</option>
                                                    <option value="pf_default_select">Flat Select</option>
                                                </select>
                                            </p>
                                            <p class="item-box">
                                                <label for="widget-item-__i__-template" class="item-label">Preset :</label>
                                                <select name="widget-item[__i__][template]" id="widget-item-__i__-template" class="widefat">
                                                    <option value="default">Default</option>
                                                </select>
                                            </p>
                                            <p class="item-box">
                                                <label for="widget-item-__i__-disable_overrides" class="item-label">Disable Overrides :</label>
                                                <input name="widget-item[__i__][disable_overrides]" id="widget-item-__i__-disable_overrides" value="yes" type="checkbox">
                                            </p>
                                            <p class="item-box">
                                                <label for="widget-item-__i__-widget_action" class="item-label">Widget Action URL :</label>
                                                <input name="widget-item[__i__][widget_action]" id="widget-item-__i__-widget_action" value="" class="widefat" type="text"><br>
                                                <small>Custom action is used if the widget is not used in shop, product archives or pages with Product Filter shortcodes. This way you can redirect filtering to your shop page or a custom page. Enter URL to redirect. For example your shop page URL</small>
                                            </p>
                                        </div>
                                    </div>
                                    <input name="widget-id" class="widget-id" value="item-__i__" type="hidden">
                                    <input name="id_base" class="id_base" value="item" type="hidden">
                                    <input name="widget-width" class="widget-width" value="250" type="hidden">
                                    <input name="widget-height" class="widget-height" value="200" type="hidden">
                                    <input name="widget_number" class="widget_number" value="8" type="hidden">
                                    <input name="multi_number" class="multi_number" value="18" type="hidden">
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
                                Product Filter widget version.
                            </div>
                        </div>
                        <div id="widget-2_item-__i__" class="widget ui-draggable">
                            <div class="widget-top">
                                <div class="widget-title-action">
                                    <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">
                                        <span class="screen-reader-text">Edit widget: Active Product Filters</span>
                                        <span class="toggle-indicator" aria-hidden="true"></span>
                                    </button>
                                    <a class="widget-control-edit hide-if-js" href="/wp-admin/widgets.php?editwidget=item-1&amp;addnew=1&amp;num=2&amp;base=item">
                                        <span class="edit">Edit</span>
                                        <span class="add">Add</span>
                                        <span class="screen-reader-text">Active Product Filters</span>
                                    </a>
                                </div>
                                <div class="widget-title ui-draggable-handle">
                                    <h3>Active Product Filters<span class="in-widget-title"></span></h3>
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
                                Display a list of active product filters.
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
                                    <a class="widget-control-edit hide-if-js" href="/wp-admin/widgets.php?editwidget=item-17&amp;sidebar=sidebar-1&amp;key=0">
                                        <span class="edit">Edit</span>
                                        <span class="add">Add</span>
                                        <span class="screen-reader-text">+ Product Filter</span>
                                    </a>
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