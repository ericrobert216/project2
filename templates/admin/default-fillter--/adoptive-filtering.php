<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:39 AM
 */
?>


<div class="pf_element" data-filter="adoptive">
    <span>Adoptive Filtering</span>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <div class="pf_options_holder">
        <h2>Adoptive Filtering</h2>
        <p>Setup adpotive filtering.<span class="wcpff_adoptive"></span></p>
        <table class="form-table">
            <tbody>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Enable/Disable Adoptive Filtering</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Enable/Disable Adoptive Filtering</span></legend>
                        <label for="wc_settings_prdctfltr_adoptive">
                            <input name="wc_settings_prdctfltr_adoptive" id="wc_settings_prdctfltr_adoptive" class="" value="1" type="checkbox"> Check this option to enable the adoptive filtering.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_adoptive_mode">Select Adoptive Filtering Mode</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_adoptive_mode" id="wc_settings_prdctfltr_adoptive_mode" style="width:300px;margin-right:12px;" class="">
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
                    <select name="wc_settings_prdctfltr_adoptive_style" id="wc_settings_prdctfltr_adoptive_style" style="width:300px;margin-right:12px;" class="">
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
                    <select name="wc_settings_prdctfltr_adoptive_depend[]" id="wc_settings_prdctfltr_adoptive_depend" style="width:300px;margin-right:12px;" class="" multiple="multiple">
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
                    <select name="wc_settings_prdctfltr_show_counts_mode" id="wc_settings_prdctfltr_show_counts_mode" style="width:300px;margin-right:12px;" class="">
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
                            <input name="wc_settings_prdctfltr_adoptive_reorder" id="wc_settings_prdctfltr_adoptive_reorder" class="" value="1" checked="checked" type="checkbox"> Check this option to reorder adoptive terms to front.						</label>
                    </fieldset>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
