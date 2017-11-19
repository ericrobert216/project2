<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:22 AM
 */
?>

<div class="pf_element rng pf_registered" data-filter="range" data-id="0">
    <span>Range Filter - Price range</span><a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a><a href="#" class="prdctfltr_c_move"><i class="prdctfltr-move"></i></a><a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <div class="pf_options_holder">
        <h2>Range Filter</h2>
        <p>Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_title_0">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfr_title[0]" id="pfr_title_0" value="" style="width:300px;margin-right:12px;" type="text">							<span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_description_0">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0;">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="pfr_description[0]" id="pfr_description_0" type="text" style="max-width:600px;margin-top:12px;min-height:90px;"></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_taxonomy_0">Select Range</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfr_taxonomy[0]" id="pfr_taxonomy_0" class="prdctfltr_rng_select" style="width:300px;margin-right:12px;">
                        <option value="price" selected="selected">Price range</option>
                        <option value="product_visibility">Tags</option>
                        <option value="product_cat">Product categories</option>
                        <option value="product_tag">Product tags</option>
                        <option value="product_shipping_class">Product shipping classes</option>
                    </select>
                    <span class="description">Enter title for the current range filter. If you leave this field blank default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_include_0">Select Terms</label>
                </th>
                <td class="forminp forminp-multiselect">
                    <select name="pfr_include[0][]" id="pfr_include_0" multiple="multiple" disabled="" style="width:300px;margin-right:12px;"></select>							<span class="description">Select terms to include. Use CTRL+Click to select terms or clear selection.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_orderby_0">Terms Order By</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfr_orderby[0]" id="pfr_orderby_0" disabled="" style="width:300px;margin-right:12px;">
                        <option value="">None (Custom Menu Order)</option>
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
                    <label for="pfr_order_0">Terms Order</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfr_order[0]" id="pfr_order_0" disabled="" style="width:300px;margin-right:12px;">
                        <option value="ASC">ASC</option>
                        <option value="DESC">DESC</option>
                    </select>
                    <span class="description">Select ascending or descending order.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_style_0">Select Style</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfr_style[0]" id="pfr_style_0" style="width:300px;margin-right:12px;">
                        <option value="flat">Flat</option>
                        <option value="modern">Modern</option>
                        <option value="html5">HTML5</option>
                        <option value="white">White</option>
                        <option value="thin">Thin</option>
                        <option value="knob">Knob</option>
                        <option value="metal">Metal</option>
                    </select>
                    <span class="description">Select current range style.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Use Grid
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Use Grid
                        </legend>
                        <label for="pfr_grid_0">
                            <input name="pfr_grid[0]" id="pfr_grid_0" value="yes" type="checkbox">Check this option to use grid in current range.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Use Adoptive Filtering
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Use Adoptive Filtering
                        </legend>
                        <label for="pfr_adoptive_0">
                            <input name="pfr_adoptive[0]" id="pfr_adoptive_0" value="yes" type="checkbox">Check this option to enable adoptive filtering on the current filter.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfr_custom_0">Custom Settings</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0;">Enter custom settings for the range filter.</p>
                    <span>START<input class="pfr_custom_creator" data-option="min" value="" type="text"></span><span>END<input class="pfr_custom_creator" data-option="max" value="" type="text"></span><span>PREFIX<input class="pfr_custom_creator" data-option="prefix" value="" type="text"></span><span>POSTFIX<input class="pfr_custom_creator" data-option="postfix" value="" type="text"></span><span>STEP<input class="pfr_custom_creator" data-option="step" min="0" value="" type="number"></span><span>GRID_NUM<input class="pfr_custom_creator" data-option="grid_num" min="0" value="" type="number"></span>
                    <textarea name="pfr_custom[0]" id="pfr_custom_0" type="text" style="max-width: 600px; margin-top: 12px; min-height: 90px; display: none;" class="pfr_registered"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
