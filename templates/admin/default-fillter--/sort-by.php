<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:29 AM
 */
?>


<div class="pf_element" data-filter="sort">
    <span>Sort By</span>
    <a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a>
    <a href="#" class="prdctfltr_c_move ui-sortable-handle"><i class="prdctfltr-move"></i></a>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2>Sort By</h2>
        <p>Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_sort"></span></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_orderby_title">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_orderby_title" id="wc_settings_prdctfltr_orderby_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_orderby_description">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="wc_settings_prdctfltr_orderby_description" id="wc_settings_prdctfltr_orderby_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_include_orderby">Select Terms</label>
                </th>
                <td class="forminp forminp-multiselect">
                    <select name="wc_settings_prdctfltr_include_orderby[]" id="wc_settings_prdctfltr_include_orderby" style="width:300px;margin-right:12px;" class="" multiple="multiple">
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
                            <input name="wc_settings_prdctfltr_orderby_none" id="wc_settings_prdctfltr_orderby_none" class="" value="1" type="checkbox"> Check this option to hide none in the current filter.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_orderby_term_customization">Style Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_orderby_term_customization" id="wc_settings_prdctfltr_orderby_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
