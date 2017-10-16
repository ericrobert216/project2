<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:21 AM
 */
?>

<div class="pf_element mta" data-filter="meta" data-id="0">
    <span>Meta Filter</span><a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a><a href="#" class="prdctfltr_c_move"><i class="prdctfltr-move"></i></a><a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a><a href="#" class="prdctfltr_set_filters"><i class="prdctfltr-terms"></i></a><a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2>Meta Filter</h2>
        <p>Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_title_0">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfm_title[0]" id="pfm_title_0" value="" style="width:300px;margin-right:12px;" type="text">							<span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_description_0">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0;">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="pfm_description[0]" id="pfm_description_0" type="text" style="max-width:600px;margin-top:12px;min-height:90px;"></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_key_0">Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfm_key[0]" id="pfm_key_0" value="" style="width:300px;margin-right:12px;" type="text">							<span class="description">Meta key.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_compare_0">Compare</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfm_compare[0]" id="pfm_compare_0" style="width:300px;margin-right:12px;">
                        <option value="=">=</option>
                        <option value="!=">!=</option>
                        <option value=">">&gt;</option>
                        <option value="<">&lt;</option>
                        <option value=">=">&gt;=</option>
                        <option value="<=">&lt;=</option>
                        <option value="LIKE">LIKE</option>
                        <option value="NOT LIKE">NOT LIKE</option>
                        <option value="IN">IN</option>
                        <option value="NOT IN">NOT IN</option>
                        <option value="EXISTS">EXISTS</option>
                        <option value="NOT EXISTS">NOT EXISTS</option>
                        <option value="BETWEEN">BETWEEN</option>
                        <option value="NOT BETWEEN">NOT_BETWEEN</option>
                    </select>
                    <span class="description">Meta compare.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_type_0">Type</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfm_type[0]" id="pfm_type_0" style="width:300px;margin-right:12px;">
                        <option value="NUMERIC">NUMERIC</option>
                        <option value="BINARY">BINARY</option>
                        <option value="CHAR">CHAR</option>
                        <option value="DATE">DATE</option>
                        <option value="DATETIME">DATETIME</option>
                        <option value="DECIMAL">DECIMAL</option>
                        <option value="SIGNED">SIGNED</option>
                        <option value="TIME">TIME</option>
                        <option value="UNSIGNED">UNSIGNED</option>
                    </select>
                    <span class="description">Meta type.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_limit_0">Show More Button</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="pfm_limit[0]" id="pfm_limit_0" style="width:100px;margin-right:12px;" value="" class="" placeholder="" min="0" max="100" step="1" type="number">							<span class="description">Limit number of terms to display before the Show More button.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Use Multi Select
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Use Multi Select
                        </legend>
                        <label for="pfm_multiselect_0">
                            <input name="pfm_multiselect[0]" id="pfm_multiselect_0" value="yes" type="checkbox">Check this option to enable multi term selection.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_relation_0">Multi Select Terms Relation</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfm_relation[0]" id="pfm_relation_0" style="width:300px;margin-right:12px;">
                        <option value="IN">Filtered products have at least one term (IN)</option>
                        <option value="AND">Filtered products have selected terms (AND)</option>
                    </select>
                    <span class="description">Select term relation when multiple terms are selected.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Hide None
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Hide None
                        </legend>
                        <label for="pfm_none_0">
                            <input name="pfm_none[0]" id="pfm_none_0" value="yes" type="checkbox">Check this option to hide none in the current filter.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_term_customization_0">Style Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfm_term_customization[0]" id="pfm_term_customization_0" value="" class="pf_term_customization" style="width:300px;margin-right:12px;" type="text">							<span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfm_filter_customization_0">Terms Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfm_filter_customization[0]" id="pfm_filter_customization_0" value="" class="pf_filter_customization" style="width:300px;margin-right:12px;" type="text">							<span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
