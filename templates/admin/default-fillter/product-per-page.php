<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:25 AM
 */
?>


<div class="pf_element" data-filter="per_page">
    <span>Products Per Page</span><a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a><a href="#" class="prdctfltr_c_move"><i class="prdctfltr-move"></i></a><a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a><a href="#" class="prdctfltr_set_filters"><i class="prdctfltr-terms"></i></a><a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2 class="wcpfs_per_page_init">Products Per Page</h2>
        <p class="wcpfs_per_page_init">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_per_page"></span></p>
        <table class="form-table wcpfs_per_page_init">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_title">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_perpage_title" id="wc_settings_prdctfltr_perpage_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_description">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="wc_settings_prdctfltr_perpage_description" id="wc_settings_prdctfltr_perpage_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_label">Override Products Per Page Filter Label</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_perpage_label" id="wc_settings_prdctfltr_perpage_label" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Enter label for the products per page filter. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_range">Per Page Filter Initial</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="wc_settings_prdctfltr_perpage_range" id="wc_settings_prdctfltr_perpage_range" style="width:100px;margin-right:12px;" value="20" class="" placeholder="" min="3" max="999" step="1" type="number"> <span class="description">Initial products per page value.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_range_limit">Per Page Filter Values</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="wc_settings_prdctfltr_perpage_range_limit" id="wc_settings_prdctfltr_perpage_range_limit" style="width:100px;margin-right:12px;" value="5" class="" placeholder="" min="2" max="20" step="1" type="number"> <span class="description">Number of product per page values.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_term_customization">Style Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_perpage_term_customization" id="wc_settings_prdctfltr_perpage_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_perpage_filter_customization">Terms Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_perpage_filter_customization" id="wc_settings_prdctfltr_perpage_filter_customization" style="width:300px;margin-right:12px;" value="" class="pf_filter_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
