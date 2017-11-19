<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:28 AM
 */
?>



<div class="pf_element" data-filter="price">
    <span>By Price</span>
    <a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a>
    <a href="#" class="prdctfltr_c_move ui-sortable-handle"><i class="prdctfltr-move"></i></a>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <a href="#" class="prdctfltr_set_filters"><i class="prdctfltr-terms"></i></a><a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2>By Price</h2>
        <p>Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_price"></span></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_title">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_price_title" id="wc_settings_prdctfltr_price_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_description">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="wc_settings_prdctfltr_price_description" id="wc_settings_prdctfltr_price_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_range">Price Range Filter Initial Price</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_price_range" id="wc_settings_prdctfltr_price_range" style="width:100px;margin-right:12px;" value="100" class="" placeholder="" type="text"> <span class="description">Initial price for the filter.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_range_add">Price Range Filter Price Add</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_price_range_add" id="wc_settings_prdctfltr_price_range_add" style="width:100px;margin-right:12px;" value="100" class="" placeholder="" type="text"> <span class="description">Price to add.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_range_limit">Price Range Filter Intervals</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="wc_settings_prdctfltr_price_range_limit" id="wc_settings_prdctfltr_price_range_limit" style="width:100px;margin-right:12px;" value="6" class="" placeholder="" min="2" max="20" step="1" type="number"> <span class="description">Number of price intervals to use. E.G. You have set the initial price to 99.9, and the add price is set to 100, you will achieve filtering like 0-99.9, 99.9-199.9, 199.9- 299.9 for the number of times as set in the price intervals setting.</span>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Hide None</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Hide None</span></legend>
                        <label for="wc_settings_prdctfltr_price_none">
                            <input name="wc_settings_prdctfltr_price_none" id="wc_settings_prdctfltr_price_none" class="" value="1" type="checkbox"> Check this option to hide none in the current filter.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_term_customization">Style Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_price_term_customization" id="wc_settings_prdctfltr_price_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_price_filter_customization">Terms Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_price_filter_customization" id="wc_settings_prdctfltr_price_filter_customization" style="width:300px;margin-right:12px;" value="" class="pf_filter_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>