<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:26 AM
 */
?>



<div class="pf_element" data-filter="vendor">
    <span>Vendor</span><a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a><a href="#" class="prdctfltr_c_move"><i class="prdctfltr-move"></i></a><a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a><a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2 class="wcpfs_vendor_init">Vendor</h2>
        <p class="wcpfs_vendor_init">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_vendor"></span></p>
        <table class="form-table wcpfs_vendor_init">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_vendor_title">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_vendor_title" id="wc_settings_prdctfltr_vendor_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_vendor_description">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="wc_settings_prdctfltr_vendor_description" id="wc_settings_prdctfltr_vendor_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_include_vendor">Select Vendors</label>
                </th>
                <td class="forminp forminp-multiselect">
                    <select name="wc_settings_prdctfltr_include_vendor[]" id="wc_settings_prdctfltr_include_vendor" style="width:300px;margin-right:12px;" class="" multiple="multiple">
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
                    <input name="wc_settings_prdctfltr_vendor_term_customization" id="wc_settings_prdctfltr_vendor_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
