<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/12/17
 * Time: 12:04 AM
 */
?>

<!--//Product Filter Preset Manager html-->
<form method="post" id="mainform" action="" enctype="multipart/form-data">
    <ul class="subsubsub wcpf_mode_presets">
        <li class="button-primary active"><a href="http://wp.default.local/wp-admin/admin.php?page=wc-settings&amp;tab=settings_products_filter&amp;section=presets" class="current"><i class="prdctfltr-filter"></i> Default Filter and Filter Presets</a></li>
        <li class="button-primary"><a href="http://wp.default.local/wp-admin/admin.php?page=wc-settings&amp;tab=settings_products_filter&amp;section=overrides"><i class="prdctfltr-overrides"></i> Filter Overrides and Restrictions</a></li>
        <li class="button-primary"><a href="http://wp.default.local/wp-admin/admin.php?page=wc-settings&amp;tab=settings_products_filter&amp;section=advanced"><i class="prdctfltr-terms"></i> Installation and Advanced Options</a></li>
        <li class="button-primary"><a href="http://wp.default.local/wp-admin/admin.php?page=wc-settings&amp;tab=settings_products_filter&amp;section=analytics"><i class="prdctfltr-analytics"></i> Filter Analytics</a></li>
        <li class="button-primary"><a href="http://wp.default.local/wp-admin/admin.php?page=wc-settings&amp;tab=settings_products_filter&amp;section=register"><i class="prdctfltr-update"></i> Register and Automatic Updates</a></li>
        <li class="button-primary pink"><a href="http://codecanyon.net/user/dzeriho/portfolio?ref=dzeriho" target="_blank"><i class="prdctfltr-check"></i> More plugins for WooCommerce?</a></li>
        <li class="button-primary pink"><a href="http://themeforest.net/user/dzeriho/portfolio?ref=dzeriho" target="_blank"><i class="prdctfltr-check"></i> Get ShopKit Theme for WooCommerce!</a></li>
    </ul>
    <br class="clear">
    <h3>Product Filter Preset Manager</h3>
    <p>Manage filter presets. Load, delete and save presets. Saved filter presets can be used with shortcodes, filter overrides and widgets. Default filter preset will always be used unless the preset is specified by shortcode, filter override or the widget parameter.</p>
    <p>
        <select id="prdctfltr_filter_presets">
            <option value="default">Default</option>
        </select>
        <a href="#" id="prdctfltr_save" class="button-primary">Save as preset</a> <a href="#" id="prdctfltr_load" class="button-primary">Load</a> <a href="#" id="prdctfltr_delete" class="button-primary">Delete</a> <a href="#" id="prdctfltr_reset_default" class="button-primary">Load default preset</a> <a href="#" id="prdctfltr_save_default" class="button-primary">Save as default preset</a>
    </p>
    <p>To use selected preset in shortcodes on pages use the following syntax: <span id="prdctfltr_slug_container">[prdctfltr_sc_products]</span></p>
    <h2 class="wcpff_mobile_init" style="display: none;">Mobile Preset</h2>
    <p class="wcpff_mobile_init" style="display: none;">Setup mobile/handheld devices preset.<span class="wcpff_mobile"></span></p>
    <table class="form-table wcpff_mobile_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_mobile_preset">Select Mobile Preset</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_mobile_preset" id="wc_settings_prdctfltr_mobile_preset" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="default" selected="selected">None</option>
                </select>
                <span class="description">Select mobile preset that will be shown on lower screen resolutions.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_mobile_resolution">Set Mobile Resolution</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_mobile_resolution" id="wc_settings_prdctfltr_mobile_resolution" style="width:100px;margin-right:12px;" value="640" class="" placeholder="" min="640" max="1024" step="1" disabled="" type="number"> <span class="description">Set screen resolution that wil trigger the mobile preset.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpff_adoptive_init" style="display: none;">Adoptive Filtering</h2>
    <p class="wcpff_adoptive_init" style="display: none;">Setup adpotive filtering.<span class="wcpff_adoptive"></span></p>
    <table class="form-table wcpff_adoptive_init" style="display: none;">
        <tbody>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Enable/Disable Adoptive Filtering</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Enable/Disable Adoptive Filtering</span></legend>
                    <label for="wc_settings_prdctfltr_adoptive">
                        <input name="wc_settings_prdctfltr_adoptive" id="wc_settings_prdctfltr_adoptive" class="" value="1" disabled="" type="checkbox"> Check this option to enable the adoptive filtering.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_adoptive_mode">Select Adoptive Filtering Mode</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_adoptive_mode" id="wc_settings_prdctfltr_adoptive_mode" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="always">Always Active</option>
                    <option value="permalink" selected="selected">Active on Permalinks and Filters</option>
                    <option value="filter">Active on Filters</option>
                </select>
                <span class="description">Select mode to use with the filtered terms.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_adoptive_style">Select Adoptive Filtering Style</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_adoptive_style" id="wc_settings_prdctfltr_adoptive_style" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="pf_adptv_default" selected="selected">Hide Terms</option>
                    <option value="pf_adptv_unclick">Disabled and Unclickable</option>
                    <option value="pf_adptv_click">Disabled but Clickable</option>
                </select>
                <span class="description">Select style to use with the filtered terms.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_adoptive_depend">Select Adoptive Filtering Dependencies</label>
            </th>
            <td class="forminp forminp-multiselect">
                <select name="wc_settings_prdctfltr_adoptive_depend[]" id="wc_settings_prdctfltr_adoptive_depend" style="width:300px;margin-right:12px;" class="" multiple="multiple" disabled="">
                    <option value="product_visibility">Tags</option>
                    <option value="product_cat">Product categories</option>
                    <option value="product_tag">Product tags</option>
                    <option value="product_shipping_class">Product shipping classes</option>
                </select>
                <span class="description">Adoptive filters can depend only on ceratin taxonomies. Select taxonomies to include. Use CTRL+Click to select multiple taxonomies or deselect all.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_show_counts_mode">Adoptive Term Products Count Mode</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_show_counts_mode" id="wc_settings_prdctfltr_show_counts_mode" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="default" selected="selected">Filtered Count / Total</option>
                    <option value="count">Filtered Count</option>
                    <option value="total">Total</option>
                </select>
                <span class="description">Select how to display the product count when adoptive filtering is used.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Reorder Adoptive Terms</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Reorder Adoptive Terms</span></legend>
                    <label for="wc_settings_prdctfltr_adoptive_reorder">
                        <input name="wc_settings_prdctfltr_adoptive_reorder" id="wc_settings_prdctfltr_adoptive_reorder" class="" value="1" checked="checked" disabled="" type="checkbox"> Check this option to reorder adoptive terms to front.						</label>
                </fieldset>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpff_basic_init" style="display: none;">General Settings</h2>
    <p class="wcpff_basic_init" style="display: none;">Setup filter basic settings and appearance.<span class="wcpff_basic"></span></p>
    <table class="form-table wcpff_basic_init" style="display: none;">
        <tbody>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Always Visible</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Always Visible</span></legend>
                    <label for="wc_settings_prdctfltr_always_visible">
                        <input name="wc_settings_prdctfltr_always_visible" id="wc_settings_prdctfltr_always_visible" class="" value="1" disabled="" type="checkbox"> This option will make Product Filter visible without the slide up/down animation at all times. <em>(Does not work with the Arrow presets as these presets are absolutely positioned and the widget version)</em>						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Instant Filtering</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Instant Filtering</span></legend>
                    <label for="wc_settings_prdctfltr_click_filter">
                        <input name="wc_settings_prdctfltr_click_filter" id="wc_settings_prdctfltr_click_filter" class="" value="1" checked="checked" disabled="" type="checkbox"> Check this option to disable the filter button and use instant product filtering.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Show Term Products Count</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Show Term Products Count</span></legend>
                    <label for="wc_settings_prdctfltr_show_counts">
                        <input name="wc_settings_prdctfltr_show_counts" id="wc_settings_prdctfltr_show_counts" class="" value="1" disabled="" type="checkbox"> Check this option to show products count with the terms.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Show Term Search Fields</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Show Term Search Fields</span></legend>
                    <label for="wc_settings_prdctfltr_show_search">
                        <input name="wc_settings_prdctfltr_show_search" id="wc_settings_prdctfltr_show_search" class="" value="1" disabled="" type="checkbox"> Check this option to show search fields on supported filters.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_selection_area">Selected Terms Area</label>
            </th>
            <td class="forminp forminp-multiselect">
                <select name="wc_settings_prdctfltr_selection_area[]" id="wc_settings_prdctfltr_selection_area" style="width:300px;margin-right:12px;" class="" multiple="multiple" disabled="">
                    <option value="topbar" selected="selected">Top Bar</option>
                    <option value="collector">Collector</option>
                    <option value="intitle">In Filter Titles</option>
                    <option value="aftertitle">After Filter Titles</option>
                </select>
                <span class="description">Set where to show selected terms. Use CTRL+Click to select multiple areas.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_collector">Selected Terms Style</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_collector" id="wc_settings_prdctfltr_collector" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="flat" selected="selected">Flat</option>
                    <option value="border">Border</option>
                </select>
                <span class="description">Collector and After Filter Titles support styles.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Reorder Selected Terms</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Reorder Selected Terms</span></legend>
                    <label for="wc_settings_prdctfltr_selected_reorder">
                        <input name="wc_settings_prdctfltr_selected_reorder" id="wc_settings_prdctfltr_selected_reorder" class="" value="1" disabled="" type="checkbox"> Check this option to reorder selected terms to front.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Stepped Filter Selection</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Stepped Filter Selection</span></legend>
                    <label for="wc_settings_prdctfltr_tabbed_selection">
                        <input name="wc_settings_prdctfltr_tabbed_selection" id="wc_settings_prdctfltr_tabbed_selection" class="" value="1" disabled="" type="checkbox"> Check this option to enable stepped selection.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Disable Top Bar</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Disable Top Bar</span></legend>
                    <label for="wc_settings_prdctfltr_disable_bar">
                        <input name="wc_settings_prdctfltr_disable_bar" id="wc_settings_prdctfltr_disable_bar" class="" value="1" disabled="" type="checkbox"> Check this option to hide the Product Filter top bar. This option will also make the filter always visible. <em>(Does not work with the Arrow presets as these presets are absolutely positioned and the widget version)</em>						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Disable Sale Button</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Disable Sale Button</span></legend>
                    <label for="wc_settings_prdctfltr_disable_sale">
                        <input name="wc_settings_prdctfltr_disable_sale" id="wc_settings_prdctfltr_disable_sale" class="" value="1" disabled="" type="checkbox"> Check this option to hide the Product Filter sale button.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Disable In Stock Button</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Disable In Stock Button</span></legend>
                    <label for="wc_settings_prdctfltr_disable_instock">
                        <input name="wc_settings_prdctfltr_disable_instock" id="wc_settings_prdctfltr_disable_instock" class="" value="1" disabled="" type="checkbox"> Check this option to hide the Product Filter in stock button.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Disable Clear All Button</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Disable Clear All Button</span></legend>
                    <label for="wc_settings_prdctfltr_disable_reset">
                        <input name="wc_settings_prdctfltr_disable_reset" id="wc_settings_prdctfltr_disable_reset" class="" value="1" disabled="" type="checkbox"> Check this option to hide the Clear All button.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_action">Override Filter Form Action</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_custom_action" id="wc_settings_prdctfltr_custom_action" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Advanced users can override filter form action. Please check documentation for more details.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_noproducts">Override No Products Action</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Input HTML/Shortcode to override the default action when no products are found. Default action means that random products will be shown when there are no products within the filter query.</p>
                <textarea name="wc_settings_prdctfltr_noproducts" id="wc_settings_prdctfltr_noproducts" style="min-width:600px;margin-top:12px;min-height:150px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        </tbody>
    </table>


    <h2>Filter Manager</h2>
    <p>Create filters! Greens are active, reds are not, blue buttons add as many filters as you need. Setup basic general settings and filter styles. Click the arrow down icon to customize each filter options. Click on the paint icon to customize the filter terms appearance if you do not like the default display options. In here you can add images, colors, custom styles. Click the cogs icon on supporting filters to customize filtering terms. Click the move icon to reorder filters, or use the X to remove them.</p>
    <table class="form-table">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc" style="display:none;">
                <label for="">Select Filters</label>
                <img class="help_tip" src="http://wp.default.local/wp-content/plugins/woocommerce/assets/images/help.png" width="16" height="16">
            </th>
            <td class="forminp forminp-pf_filter">
                <div class="form-field prdctfltr_customizer_static">

                    //include general-setting.php

                    //include filter-style.php

                    //include adoptive-filtering.php

                    //include mobile-preset.php

                </div>
                <h3>Available Filters</h3>
                <p class="form-field prdctfltr_customizer_fields">
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="sort">
                        <i class="prdctfltr-eye"></i>
                        <span>Sort By</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="price">
                        <i class="prdctfltr-eye"></i>
                        <span>By Price</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="cat">
                        <i class="prdctfltr-eye"></i>
                        <span>By Categories</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="tag">
                        <i class="prdctfltr-eye"></i>
                        <span>By Tags</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="vendor">
                        <i class="prdctfltr-eye"></i>
                        <span>Vendor</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="instock">
                        <i class="prdctfltr-eye"></i>
                        <span>In Stock Filter</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="per_page">
                        <i class="prdctfltr-eye"></i>
                        <span>Products Per Page</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add_filter pf_active" data-filter="search">
                        <i class="prdctfltr-eye"></i>
                        <span>Search Filter</span>
                    </a>
                    <a href="#" class="prdctfltr_c_add pf_advanced"><i class="prdctfltr-plus"></i> <span>Add advanced filter</span></a>
                    <a href="#" class="prdctfltr_c_add pf_range"><i class="prdctfltr-plus"></i> <span>Add range filter</span></a>
                    <a href="#" class="prdctfltr_c_add pf_meta"><i class="prdctfltr-plus"></i> <span>Add meta filter</span></a>
                </p>
                <div class="form-field prdctfltr_customizer ui-sortable">

                    //include sort-by.php

                    //include by-price.php

                    //include by-categories.php

                    //include by-tags.php

                    //include vendor.php

                    //include in-stock-filter.php

                    //include product-per-page.php

                    //include search-filter.php

                    //include advanced-filter.php

                    //include ranger-filter.php

                    //include meta-filter.php









                </div>
                <p class="form-field prdctfltr_hidden">
                    <select name="wc_settings_prdctfltr_active_filters[]" id="wc_settings_prdctfltr_active_filters" class="hidden" multiple="multiple">
                        <option value="sort" selected="selected">Sort By</option>
                        <option value="price" selected="selected">By Price</option>
                        <option value="cat" selected="selected">By Categories</option>
                        <option value="tag" selected="selected">By Tags</option>
                        <option value="vendor" selected="selected">Vendor</option>
                        <option value="instock" selected="selected">In Stock Filter</option>
                        <option value="per_page" selected="selected">Products Per Page</option>
                        <option value="search" selected="selected">Search Filter</option>
                        <option value="advanced" selected="selected">Advanced Filter</option>
                        <option value="range" selected="selected">Range Filter</option>
                        <option value="meta" selected="selected">Meta Filter</option>
                    </select>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_per_page_init" style="display: none;">Products Per Page</h2>
    <p class="wcpfs_per_page_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_per_page"></span></p>
    <table class="form-table wcpfs_per_page_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_perpage_title" id="wc_settings_prdctfltr_perpage_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_perpage_description" id="wc_settings_prdctfltr_perpage_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_label">Override Products Per Page Filter Label</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_perpage_label" id="wc_settings_prdctfltr_perpage_label" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Enter label for the products per page filter. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_range">Per Page Filter Initial</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_perpage_range" id="wc_settings_prdctfltr_perpage_range" style="width:100px;margin-right:12px;" value="20" class="" placeholder="" min="3" max="999" step="1" disabled="" type="number"> <span class="description">Initial products per page value.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_range_limit">Per Page Filter Values</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_perpage_range_limit" id="wc_settings_prdctfltr_perpage_range_limit" style="width:100px;margin-right:12px;" value="5" class="" placeholder="" min="2" max="20" step="1" disabled="" type="number"> <span class="description">Number of product per page values.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_perpage_term_customization" id="wc_settings_prdctfltr_perpage_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_perpage_filter_customization">Terms Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_perpage_filter_customization" id="wc_settings_prdctfltr_perpage_filter_customization" style="width:300px;margin-right:12px;" value="" class="pf_filter_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_vendor_init" style="display: none;">Vendor</h2>
    <p class="wcpfs_vendor_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_vendor"></span></p>
    <table class="form-table wcpfs_vendor_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_vendor_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_vendor_title" id="wc_settings_prdctfltr_vendor_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_vendor_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_vendor_description" id="wc_settings_prdctfltr_vendor_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_include_vendor">Select Vendors</label>
            </th>
            <td class="forminp forminp-multiselect">
                <select name="wc_settings_prdctfltr_include_vendor[]" id="wc_settings_prdctfltr_include_vendor" style="width:300px;margin-right:12px;" class="" multiple="multiple" disabled="">
                    <option value="1">admin</option>
                </select>
                <span class="description">Select terms to include. Use CTRL+Click to select terms or clear selection.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_vendor_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_vendor_term_customization" id="wc_settings_prdctfltr_vendor_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_instock_init" style="display: none;">In Stock</h2>
    <p class="wcpfs_instock_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_instock"></span></p>
    <table class="form-table wcpfs_instock_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_instock_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_instock_title" id="wc_settings_prdctfltr_instock_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_instock_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_instock_description" id="wc_settings_prdctfltr_instock_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_instock_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_instock_term_customization" id="wc_settings_prdctfltr_instock_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_sort_init" style="display: none;">Sort By</h2>
    <p class="wcpfs_sort_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_sort"></span></p>
    <table class="form-table wcpfs_sort_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_orderby_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_orderby_title" id="wc_settings_prdctfltr_orderby_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_orderby_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_orderby_description" id="wc_settings_prdctfltr_orderby_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_include_orderby">Select Terms</label>
            </th>
            <td class="forminp forminp-multiselect">
                <select name="wc_settings_prdctfltr_include_orderby[]" id="wc_settings_prdctfltr_include_orderby" style="width:300px;margin-right:12px;" class="" multiple="multiple" disabled="">
                    <option value="menu_order" selected="selected">Default</option>
                    <option value="comment_count">Review Count</option>
                    <option value="popularity" selected="selected">Popularity</option>
                    <option value="rating" selected="selected">Average rating</option>
                    <option value="date" selected="selected">Newness</option>
                    <option value="price" selected="selected">Price: low to high</option>
                    <option value="price-desc" selected="selected">Price: high to low</option>
                    <option value="rand">Random Products</option>
                    <option value="title">Product Name</option>
                </select>
                <span class="description">Select terms to include. Use CTRL+Click to select terms or clear selection.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Hide None</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Hide None</span></legend>
                    <label for="wc_settings_prdctfltr_orderby_none">
                        <input name="wc_settings_prdctfltr_orderby_none" id="wc_settings_prdctfltr_orderby_none" class="" value="1" disabled="" type="checkbox"> Check this option to hide none in the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_orderby_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_orderby_term_customization" id="wc_settings_prdctfltr_orderby_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_search_init" style="display: none;">Search</h2>
    <p class="wcpfs_search_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_search"></span></p>
    <table class="form-table wcpfs_search_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_search_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_search_title" id="wc_settings_prdctfltr_search_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_search_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_search_description" id="wc_settings_prdctfltr_search_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_search_placeholder">Override Search Filter Placeholder</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_search_placeholder" id="wc_settings_prdctfltr_search_placeholder" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Enter title for the search filter placeholder. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_price_init" style="display: none;">By Price</h2>
    <p class="wcpfs_price_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_price"></span></p>
    <table class="form-table wcpfs_price_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_price_title" id="wc_settings_prdctfltr_price_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_price_description" id="wc_settings_prdctfltr_price_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_range">Price Range Filter Initial Price</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_price_range" id="wc_settings_prdctfltr_price_range" style="width:100px;margin-right:12px;" value="100" class="" placeholder="" disabled="" type="text"> <span class="description">Initial price for the filter.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_range_add">Price Range Filter Price Add</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_price_range_add" id="wc_settings_prdctfltr_price_range_add" style="width:100px;margin-right:12px;" value="100" class="" placeholder="" disabled="" type="text"> <span class="description">Price to add.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_range_limit">Price Range Filter Intervals</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_price_range_limit" id="wc_settings_prdctfltr_price_range_limit" style="width:100px;margin-right:12px;" value="6" class="" placeholder="" min="2" max="20" step="1" disabled="" type="number"> <span class="description">Number of price intervals to use. E.G. You have set the initial price to 99.9, and the add price is set to 100, you will achieve filtering like 0-99.9, 99.9-199.9, 199.9- 299.9 for the number of times as set in the price intervals setting.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Hide None</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Hide None</span></legend>
                    <label for="wc_settings_prdctfltr_price_none">
                        <input name="wc_settings_prdctfltr_price_none" id="wc_settings_prdctfltr_price_none" class="" value="1" disabled="" type="checkbox"> Check this option to hide none in the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_price_term_customization" id="wc_settings_prdctfltr_price_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_price_filter_customization">Terms Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_price_filter_customization" id="wc_settings_prdctfltr_price_filter_customization" style="width:300px;margin-right:12px;" value="" class="pf_filter_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_cat_init" style="display: none;">Category Filter</h2>
    <p class="wcpfs_cat_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_cat"></span></p>
    <table class="form-table wcpfs_cat_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_cat_title" id="wc_settings_prdctfltr_cat_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_cat_description" id="wc_settings_prdctfltr_cat_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_include_cats">Select Terms</label>
            </th>
            <td class="forminp forminp-pf_taxonomy">
                <select name="wc_settings_prdctfltr_include_cats[]" id="wc_settings_prdctfltr_include_cats" style="width:300px;margin-right:12px;" class="" multiple="multiple" disabled="">
                    <option value="accessories">Accessories</option>
                    <option value="hoodies">Hoodies</option>
                    <option value="tshirts">Tshirts</option>
                </select>
                Select terms to include. Use CTRL+Click to select terms or clear selection.
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_orderby">Terms Order By</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_cat_orderby" id="wc_settings_prdctfltr_cat_orderby" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="" selected="selected">None (Custom Menu Order)</option>
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="number">Number</option>
                    <option value="slug">Slug</option>
                    <option value="count">Count</option>
                </select>
                <span class="description">Select terms ordering.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_order">Term Order</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_cat_order" id="wc_settings_prdctfltr_cat_order" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="ASC" selected="selected">ASC</option>
                    <option value="DESC">DESC</option>
                </select>
                <span class="description">Select ascending or descending order.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_limit">Show More Button</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_cat_limit" id="wc_settings_prdctfltr_cat_limit" style="width:100px;margin-right:12px;" value="0" class="" placeholder="" min="0" max="100" step="1" disabled="" type="number"> <span class="description">Limit number of terms to display before the Show More button.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Hierarchy</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Hierarchy</span></legend>
                    <label for="wc_settings_prdctfltr_cat_hierarchy">
                        <input name="wc_settings_prdctfltr_cat_hierarchy" id="wc_settings_prdctfltr_cat_hierarchy" class="" value="1" disabled="" type="checkbox"> Check this option to enable hierarchy.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_mode">Hierarchy Filtering Mode</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_cat_mode" id="wc_settings_prdctfltr_cat_mode" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="showall" selected="selected">Show all</option>
                    <option value="drill">Show same level only (Drill filter)</option>
                    <option value="drillback">Drill filter with removable parent</option>
                    <option value="subonly">Show only child terms, selected parents will not be removable</option>
                    <option value="subonlyback">Show only child terms with removable parent</option>
                </select>
                <span class="description">Select filter hierarchy mode.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Expand Parents</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Expand Parents</span></legend>
                    <label for="wc_settings_prdctfltr_cat_hierarchy_mode">
                        <input name="wc_settings_prdctfltr_cat_hierarchy_mode" id="wc_settings_prdctfltr_cat_hierarchy_mode" class="" value="1" disabled="" type="checkbox"> Check this option to expand parent terms on load.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Multi Select</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Multi Select</span></legend>
                    <label for="wc_settings_prdctfltr_cat_multi">
                        <input name="wc_settings_prdctfltr_cat_multi" id="wc_settings_prdctfltr_cat_multi" class="" value="1" disabled="" type="checkbox"> Check this option to enable multi term selection.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_relation">Multi Select Terms Relation</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_cat_relation" id="wc_settings_prdctfltr_cat_relation" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="IN" selected="selected">Filtered products have at least one term (IN)</option>
                    <option value="AND">Filtered products have selected terms (AND)</option>
                </select>
                <span class="description">Select term relation when multiple terms are selected.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Selection Change Reset</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Selection Change Reset</span></legend>
                    <label for="wc_settings_prdctfltr_cat_selection">
                        <input name="wc_settings_prdctfltr_cat_selection" id="wc_settings_prdctfltr_cat_selection" class="" value="1" disabled="" type="checkbox"> Check this option to reset other filters when this one is used.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Adoptive Filtering</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Adoptive Filtering</span></legend>
                    <label for="wc_settings_prdctfltr_cat_adoptive">
                        <input name="wc_settings_prdctfltr_cat_adoptive" id="wc_settings_prdctfltr_cat_adoptive" class="" value="1" disabled="" type="checkbox"> Check this option to enable adoptive filtering on the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Hide None</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Hide None</span></legend>
                    <label for="wc_settings_prdctfltr_cat_none">
                        <input name="wc_settings_prdctfltr_cat_none" id="wc_settings_prdctfltr_cat_none" class="" value="1" disabled="" type="checkbox"> Check this option to hide none in the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_cat_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_cat_term_customization" id="wc_settings_prdctfltr_cat_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_tag_init" style="display: none;">Tag Filter</h2>
    <p class="wcpfs_tag_init" style="display: none;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_tag"></span></p>
    <table class="form-table wcpfs_tag_init" style="display: none;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_tag_title" id="wc_settings_prdctfltr_tag_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" disabled="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_tag_description" id="wc_settings_prdctfltr_tag_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder="" disabled=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_include_tags">Select Terms</label>
            </th>
            <td class="forminp forminp-pf_taxonomy">
                <select name="wc_settings_prdctfltr_include_tags[]" id="wc_settings_prdctfltr_include_tags" style="width:300px;margin-right:12px;" class="" multiple="multiple" disabled="">
                </select> Select terms to include. Use CTRL+Click to select terms or clear selection.
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_orderby">Terms Order By</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_tag_orderby" id="wc_settings_prdctfltr_tag_orderby" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="" selected="selected">None (Custom Menu Order)</option>
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="number">Number</option>
                    <option value="slug">Slug</option>
                    <option value="count">Count</option>
                </select>
                <span class="description">Select terms ordering.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_order">Tags Order</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_tag_order" id="wc_settings_prdctfltr_tag_order" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="ASC" selected="selected">ASC</option>
                    <option value="DESC">DESC</option>
                </select>
                <span class="description">Select ascending or descending order.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_limit">Show More Button</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_tag_limit" id="wc_settings_prdctfltr_tag_limit" style="width:100px;margin-right:12px;" value="0" class="" placeholder="" min="0" max="100" step="1" disabled="" type="number"> <span class="description">Limit number of terms to display before the Show More button.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Multi Select</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Multi Select</span></legend>
                    <label for="wc_settings_prdctfltr_tag_multi">
                        <input name="wc_settings_prdctfltr_tag_multi" id="wc_settings_prdctfltr_tag_multi" class="" value="1" disabled="" type="checkbox"> Check this option to enable multi term selection.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_relation">Multi Select Terms Relation</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_tag_relation" id="wc_settings_prdctfltr_tag_relation" style="width:300px;margin-right:12px;" class="" disabled="">
                    <option value="IN" selected="selected">Filtered products have at least one term (IN)</option>
                    <option value="AND">Filtered products have selected terms (AND)</option>
                </select>
                <span class="description">Select term relation when multiple terms are selected.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Selection Change Reset</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Selection Change Reset</span></legend>
                    <label for="wc_settings_prdctfltr_tag_selection">
                        <input name="wc_settings_prdctfltr_tag_selection" id="wc_settings_prdctfltr_tag_selection" class="" value="1" disabled="" type="checkbox"> Check this option to reset other filters when this one is used.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Adoptive Filtering</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Adoptive Filtering</span></legend>
                    <label for="wc_settings_prdctfltr_tag_adoptive">
                        <input name="wc_settings_prdctfltr_tag_adoptive" id="wc_settings_prdctfltr_tag_adoptive" class="" value="1" disabled="" type="checkbox"> Check this option to enable adoptive filtering on the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Hide None</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Hide None</span></legend>
                    <label for="wc_settings_prdctfltr_tag_none">
                        <input name="wc_settings_prdctfltr_tag_none" id="wc_settings_prdctfltr_tag_none" class="" value="1" disabled="" type="checkbox"> Check this option to hide none in the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_tag_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_tag_term_customization" id="wc_settings_prdctfltr_tag_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" disabled="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <h2 class="wcpfs_char_init" style="visibility: hidden; position: absolute; width: 0px; height: 0px; left: -10000px; top: -10000px;">Characteristics Filter</h2>
    <p class="wcpfs_char_init" style="visibility: hidden; position: absolute; width: 0px; height: 0px; left: -10000px; top: -10000px;">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_char"></span></p>
    <table class="form-table wcpfs_char_init" style="visibility: hidden; position: absolute; width: 0px; height: 0px; left: -10000px; top: -10000px;">
        <tbody>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_tax_title">Filter Title</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_custom_tax_title" id="wc_settings_prdctfltr_custom_tax_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_tax_description">Filter Description</label>
            </th>
            <td class="forminp forminp-textarea">
                <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                <textarea name="wc_settings_prdctfltr_custom_tax_description" id="wc_settings_prdctfltr_custom_tax_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_include_chars">Select Terms</label>
            </th>
            <td class="forminp forminp-pf_taxonomy">
                <select name="wc_settings_prdctfltr_include_chars[]" id="wc_settings_prdctfltr_include_chars" style="width:300px;margin-right:12px;" class="" multiple="multiple">
                </select> Select terms to include. Use CTRL+Click to select terms or clear selection.
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_tax_orderby">Terms Order By</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_custom_tax_orderby" id="wc_settings_prdctfltr_custom_tax_orderby" style="width:300px;margin-right:12px;" class="">
                    <option value="" selected="selected">None (Custom Menu Order)</option>
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="number">Number</option>
                    <option value="slug">Slug</option>
                    <option value="count">Count</option>
                </select>
                <span class="description">Select terms ordering.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_tax_order">Characteristics Order</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_custom_tax_order" id="wc_settings_prdctfltr_custom_tax_order" style="width:300px;margin-right:12px;" class="">
                    <option value="ASC" selected="selected">ASC</option>
                    <option value="DESC">DESC</option>
                </select>
                <span class="description">Select ascending or descending order.</span>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_tax_limit">Show More Button</label>
            </th>
            <td class="forminp forminp-number">
                <input name="wc_settings_prdctfltr_custom_tax_limit" id="wc_settings_prdctfltr_custom_tax_limit" style="width:100px;margin-right:12px;" value="0" class="" placeholder="" min="0" max="100" step="1" type="number"> <span class="description">Limit number of terms to display before the Show More button.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Multi Select</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Multi Select</span></legend>
                    <label for="wc_settings_prdctfltr_chars_multi">
                        <input name="wc_settings_prdctfltr_chars_multi" id="wc_settings_prdctfltr_chars_multi" class="" value="1" type="checkbox"> Check this option to enable multi term selection.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_custom_tax_relation">Multi Select Terms Relation</label>
            </th>
            <td class="forminp forminp-select">
                <select name="wc_settings_prdctfltr_custom_tax_relation" id="wc_settings_prdctfltr_custom_tax_relation" style="width:300px;margin-right:12px;" class="">
                    <option value="IN" selected="selected">Filtered products have at least one term (IN)</option>
                    <option value="AND">Filtered products have selected terms (AND)</option>
                </select>
                <span class="description">Select term relation when multiple terms are selected.</span>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Selection Change Reset</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Selection Change Reset</span></legend>
                    <label for="wc_settings_prdctfltr_chars_selection">
                        <input name="wc_settings_prdctfltr_chars_selection" id="wc_settings_prdctfltr_chars_selection" class="" value="1" type="checkbox"> Check this option to reset other filters when this one is used.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Use Adoptive Filtering</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Use Adoptive Filtering</span></legend>
                    <label for="wc_settings_prdctfltr_chars_adoptive">
                        <input name="wc_settings_prdctfltr_chars_adoptive" id="wc_settings_prdctfltr_chars_adoptive" class="" value="1" type="checkbox"> Check this option to enable adoptive filtering on the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr class="" valign="top">
            <th scope="row" class="titledesc">Hide None</th>
            <td class="forminp forminp-checkbox">
                <fieldset>
                    <legend class="screen-reader-text"><span>Hide None</span></legend>
                    <label for="wc_settings_prdctfltr_chars_none">
                        <input name="wc_settings_prdctfltr_chars_none" id="wc_settings_prdctfltr_chars_none" class="" value="1" type="checkbox"> Check this option to hide none in the current filter.						</label>
                </fieldset>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row" class="titledesc">
                <label for="wc_settings_prdctfltr_chars_term_customization">Style Customization Key</label>
            </th>
            <td class="forminp forminp-text">
                <input name="wc_settings_prdctfltr_chars_term_customization" id="wc_settings_prdctfltr_chars_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
            </td>
        </tr>
        </tbody>
    </table>
    <p class="submit">
        <a href="#" id="prdctfltr_save_bottom" class="button-primary">Save as preset</a><input name="save" class="button-primary woocommerce-save-button" value="Save as default preset" id="save" type="button">
        <input id="_wpnonce" name="_wpnonce" value="3b884607ff" type="hidden"><input name="_wp_http_referer" value="/wp-admin/admin.php?page=wc-settings&amp;tab=settings_products_filter" type="hidden">
    </p>
</form>


<!--//Filter Manager html

    //include general-setting.php

    //include filter-style.php

    //include adoptive-filtering.php

    //include mobile-preset.php

//Available Filters html

    //include sort-by.php

    //include by-price.php

    //include by-categories.php

    //include by-tags.php

    //include vendor.php

    //include in-stock-filter.php

    //include product-per-page.php

    //include search-filter.php

    //include advanced-filter.php

    //include ranger-filter.php

    //include meta-filter.php-->