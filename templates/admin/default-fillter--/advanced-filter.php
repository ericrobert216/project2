<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:23 AM
 */
?>


<div class="pf_element adv pf_registered" data-filter="advanced" data-id="0">
    <span>Advanced Filter - Tags</span><a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a><a href="#" class="prdctfltr_c_move"><i class="prdctfltr-move"></i></a><a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a><a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2>Advanced Filter</h2>
        <p>Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_title_0">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfa_title[0]" id="pfa_title_0" value="" style="width:300px;margin-right:12px;" type="text">							<span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_description_0">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0;">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="pfa_description[0]" id="pfa_description_0" type="text" style="max-width:600px;margin-top:12px;min-height:90px;"></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_taxonomy_0">Select Taxonomy</label>
                </th>
                <td class="forminp forminp-select">
                    <select id="pfa_taxonomy_0" name="pfa_taxonomy[0]" class="prdctfltr_adv_select" style="width:300px;margin-right:12px;">
                        <option value="product_visibility">Tags</option>
                        <option value="product_cat">Product categories</option>
                        <option value="product_tag">Product tags</option>
                        <option value="product_shipping_class">Product shipping classes</option>
                    </select>
                    <span class="description">Select filter product taxonomy.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_include_0">Select Terms</label>
                </th>
                <td class="forminp forminp-multiselect">
                    <select name="pfa_include[0][]" id="pfa_include_0" style="width:300px;margin-right:12px;" multiple="multiple">
                        <option value="exclude-from-catalog">exclude-from-catalog</option>
                        <option value="exclude-from-search">exclude-from-search</option>
                        <option value="featured">featured</option>
                        <option value="outofstock">outofstock</option>
                        <option value="rated-1">rated-1</option>
                        <option value="rated-2">rated-2</option>
                        <option value="rated-3">rated-3</option>
                        <option value="rated-4">rated-4</option>
                        <option value="rated-5">rated-5</option>
                    </select>
                    <span class="description">Select terms to include. Use CTRL+Click to select terms or clear selection.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_style_0">Appearance</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfa_style[0]" id="pfa_style_0" style="width:300px;margin-right:12px;">
                        <option value="pf_attr_text">Text</option>
                        <option value="pf_attr_imgtext">Thumbnails with text</option>
                        <option value="pf_attr_img">Thumbnails only</option>
                    </select>
                    <span class="description">Select style preset to use with the current taxonomy (works only with product attributes).<em class="pf_deprecated"></em></span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_orderby_0">Terms Order By</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfa_orderby[0]" id="pfa_orderby_0" style="width:300px;margin-right:12px;">
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
                    <label for="pfa_order_0">Terms Order</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfa_order[0]" id="pfa_order_0" style="width:300px;margin-right:12px;">
                        <option value="ASC">ASC</option>
                        <option value="DESC">DESC</option>
                    </select>
                    <span class="description">Select ascending or descending order.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_limit_0">Show More Button</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="pfa_limit[0]" id="pfa_limit_0" style="width:100px;margin-right:12px;" value="" class="" placeholder="" min="0" max="100" step="1" type="number">							<span class="description">Limit number of terms to display before the Show More button.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Use Taxonomy Hierarchy
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Use Taxonomy Hierarchy
                        </legend>
                        <label for="pfa_hierarchy_0">
                            <input name="pfa_hierarchy[0]" id="pfa_hierarchy_0" value="yes" type="checkbox">Check this option to enable hierarchy on current filter.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_mode_0">Taxonomy Hierarchy Filtering Mode</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfa_mode[0]" id="pfa_mode_0" style="width:300px;margin-right:12px;">
                        <option value="showall">Show all</option>
                        <option value="drill">Show same level only (Drill filter)</option>
                        <option value="drillback">Drill filter with removable parent</option>
                        <option value="subonly">Show only child terms, selected parents will not be removable</option>
                        <option value="subonlyback">Show only child terms with removable parent</option>
                    </select>
                    <span class="description">Select filter hierarchy mode.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Taxonomy Expand Parents
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Taxonomy Expand Parents
                        </legend>
                        <label for="pfa_hierarchy_mode_0">
                            <input name="pfa_hierarchy_mode[0]" id="pfa_hierarchy_mode_0" value="yes" type="checkbox"> Check this option to expand parent terms on load.								</label>
                    </fieldset>
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
                        <label for="pfa_multiselect_0">
                            <input name="pfa_multiselect[0]" id="pfa_multiselect_0" value="yes" type="checkbox">Check this option to enable multi term selection.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_relation_0">Multi Select Terms Relation</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="pfa_relation[0]" id="pfa_relation_0" style="width:300px;margin-right:12px;">
                        <option value="IN">Filtered products have at least one term (IN)</option>
                        <option value="AND">Filtered products have selected terms (AND)</option>
                    </select>
                    <span class="description">Select term relation when multiple terms are selected.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    Selection Change Reset
                </th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text">
                            Selection Change Reset
                        </legend>
                        <label for="pfa_selection_0">
                            <input name="pfa_selection[0]" id="pfa_selection_0" value="yes" type="checkbox">Check this option to reset other filters when this one is used.								</label>
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
                        <label for="pfa_adoptive_0">
                            <input name="pfa_adoptive[0]" id="pfa_adoptive_0" value="yes" type="checkbox">Check this option to enable adoptive filtering on the current filter.								</label>
                    </fieldset>
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
                        <label for="pfa_none_0">
                            <input name="pfa_none[0]" id="pfa_none_0" value="yes" type="checkbox">Check this option to hide none in the current filter.								</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="pfa_term_customization_0">Style Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="pfa_term_customization[0]" id="pfa_term_customization_0" value="" class="pf_term_customization" style="width:300px;margin-right:12px;" type="text">							<span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
