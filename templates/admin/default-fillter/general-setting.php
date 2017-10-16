<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:41 AM
 */
?>


<div class="pf_element" data-filter="basic">
    <span>General Settings</span>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <div class="pf_options_holder">
        <h2>General Settings</h2>
        <p>Setup filter basic settings and appearance.<span class="wcpff_basic"></span></p>
        <table class="form-table">
            <tbody>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Always Visible</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Always Visible</span></legend>
                        <label for="wc_settings_prdctfltr_always_visible">
                            <input name="wc_settings_prdctfltr_always_visible" id="wc_settings_prdctfltr_always_visible" class="" value="1" type="checkbox"> This option will make Product Filter visible without the slide up/down animation at all times. <em>(Does not work with the Arrow presets as these presets are absolutely positioned and the widget version)</em>						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Instant Filtering</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Instant Filtering</span></legend>
                        <label for="wc_settings_prdctfltr_click_filter">
                            <input name="wc_settings_prdctfltr_click_filter" id="wc_settings_prdctfltr_click_filter" class="" value="1" checked="checked" type="checkbox"> Check this option to disable the filter button and use instant product filtering.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Show Term Products Count</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Show Term Products Count</span></legend>
                        <label for="wc_settings_prdctfltr_show_counts">
                            <input name="wc_settings_prdctfltr_show_counts" id="wc_settings_prdctfltr_show_counts" class="" value="1" type="checkbox"> Check this option to show products count with the terms.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Show Term Search Fields</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Show Term Search Fields</span></legend>
                        <label for="wc_settings_prdctfltr_show_search">
                            <input name="wc_settings_prdctfltr_show_search" id="wc_settings_prdctfltr_show_search" class="" value="1" type="checkbox"> Check this option to show search fields on supported filters.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_selection_area">Selected Terms Area</label>
                </th>
                <td class="forminp forminp-multiselect">
                    <select name="wc_settings_prdctfltr_selection_area[]" id="wc_settings_prdctfltr_selection_area" style="width:300px;margin-right:12px;" class="" multiple="multiple">
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
                    <select name="wc_settings_prdctfltr_collector" id="wc_settings_prdctfltr_collector" style="width:300px;margin-right:12px;" class="">
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
                            <input name="wc_settings_prdctfltr_selected_reorder" id="wc_settings_prdctfltr_selected_reorder" class="" value="1" type="checkbox"> Check this option to reorder selected terms to front.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Stepped Filter Selection</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Stepped Filter Selection</span></legend>
                        <label for="wc_settings_prdctfltr_tabbed_selection">
                            <input name="wc_settings_prdctfltr_tabbed_selection" id="wc_settings_prdctfltr_tabbed_selection" class="" value="1" type="checkbox"> Check this option to enable stepped selection.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Disable Top Bar</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Disable Top Bar</span></legend>
                        <label for="wc_settings_prdctfltr_disable_bar">
                            <input name="wc_settings_prdctfltr_disable_bar" id="wc_settings_prdctfltr_disable_bar" class="" value="1" type="checkbox"> Check this option to hide the Product Filter top bar. This option will also make the filter always visible. <em>(Does not work with the Arrow presets as these presets are absolutely positioned and the widget version)</em>						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Disable Sale Button</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Disable Sale Button</span></legend>
                        <label for="wc_settings_prdctfltr_disable_sale">
                            <input name="wc_settings_prdctfltr_disable_sale" id="wc_settings_prdctfltr_disable_sale" class="" value="1" type="checkbox"> Check this option to hide the Product Filter sale button.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Disable In Stock Button</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Disable In Stock Button</span></legend>
                        <label for="wc_settings_prdctfltr_disable_instock">
                            <input name="wc_settings_prdctfltr_disable_instock" id="wc_settings_prdctfltr_disable_instock" class="" value="1" type="checkbox"> Check this option to hide the Product Filter in stock button.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Disable Clear All Button</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Disable Clear All Button</span></legend>
                        <label for="wc_settings_prdctfltr_disable_reset">
                            <input name="wc_settings_prdctfltr_disable_reset" id="wc_settings_prdctfltr_disable_reset" class="" value="1" type="checkbox"> Check this option to hide the Clear All button.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_custom_action">Override Filter Form Action</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_custom_action" id="wc_settings_prdctfltr_custom_action" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Advanced users can override filter form action. Please check documentation for more details.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_noproducts">Override No Products Action</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Input HTML/Shortcode to override the default action when no products are found. Default action means that random products will be shown when there are no products within the filter query.</p>
                    <textarea name="wc_settings_prdctfltr_noproducts" id="wc_settings_prdctfltr_noproducts" style="min-width:600px;margin-top:12px;min-height:150px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
