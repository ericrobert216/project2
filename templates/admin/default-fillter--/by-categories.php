<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:27 AM
 */
?>


<div class="pf_element" data-filter="cat">
    <span>By Categories</span>
    <a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a>
    <a href="#" class="prdctfltr_c_move ui-sortable-handle"><i class="prdctfltr-move"></i></a>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <a href="#" class="prdctfltr_set_terms"><i class="prdctfltr-style"></i></a>
    <div class="pf_options_holder">
        <h2>Category Filter</h2>
        <p>Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_cat"></span></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_cat_title">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_cat_title" id="wc_settings_prdctfltr_cat_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_cat_description">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="wc_settings_prdctfltr_cat_description" id="wc_settings_prdctfltr_cat_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_include_cats">Select Terms</label>
                </th>
                <td class="forminp forminp-pf_taxonomy">
                    <select name="wc_settings_prdctfltr_include_cats[]" id="wc_settings_prdctfltr_include_cats" style="width:300px;margin-right:12px;" class="" multiple="multiple">
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
                    <select name="wc_settings_prdctfltr_cat_orderby" id="wc_settings_prdctfltr_cat_orderby" style="width:300px;margin-right:12px;" class="">
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
                    <select name="wc_settings_prdctfltr_cat_order" id="wc_settings_prdctfltr_cat_order" style="width:300px;margin-right:12px;" class="">
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
                    <input name="wc_settings_prdctfltr_cat_limit" id="wc_settings_prdctfltr_cat_limit" style="width:100px;margin-right:12px;" value="0" class="" placeholder="" min="0" max="100" step="1" type="number"> <span class="description">Limit number of terms to display before the Show More button.</span>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Use Hierarchy</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Use Hierarchy</span></legend>
                        <label for="wc_settings_prdctfltr_cat_hierarchy">
                            <input name="wc_settings_prdctfltr_cat_hierarchy" id="wc_settings_prdctfltr_cat_hierarchy" class="" value="1" type="checkbox"> Check this option to enable hierarchy.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_cat_mode">Hierarchy Filtering Mode</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_cat_mode" id="wc_settings_prdctfltr_cat_mode" style="width:300px;margin-right:12px;" class="">
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
                            <input name="wc_settings_prdctfltr_cat_hierarchy_mode" id="wc_settings_prdctfltr_cat_hierarchy_mode" class="" value="1" type="checkbox"> Check this option to expand parent terms on load.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Use Multi Select</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Use Multi Select</span></legend>
                        <label for="wc_settings_prdctfltr_cat_multi">
                            <input name="wc_settings_prdctfltr_cat_multi" id="wc_settings_prdctfltr_cat_multi" class="" value="1" type="checkbox"> Check this option to enable multi term selection.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_cat_relation">Multi Select Terms Relation</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_cat_relation" id="wc_settings_prdctfltr_cat_relation" style="width:300px;margin-right:12px;" class="">
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
                            <input name="wc_settings_prdctfltr_cat_selection" id="wc_settings_prdctfltr_cat_selection" class="" value="1" type="checkbox"> Check this option to reset other filters when this one is used.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Use Adoptive Filtering</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Use Adoptive Filtering</span></legend>
                        <label for="wc_settings_prdctfltr_cat_adoptive">
                            <input name="wc_settings_prdctfltr_cat_adoptive" id="wc_settings_prdctfltr_cat_adoptive" class="" value="1" type="checkbox"> Check this option to enable adoptive filtering on the current filter.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Hide None</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Hide None</span></legend>
                        <label for="wc_settings_prdctfltr_cat_none">
                            <input name="wc_settings_prdctfltr_cat_none" id="wc_settings_prdctfltr_cat_none" class="" value="1" type="checkbox"> Check this option to hide none in the current filter.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_cat_term_customization">Style Customization Key</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_cat_term_customization" id="wc_settings_prdctfltr_cat_term_customization" style="width:300px;margin-right:12px;" value="" class="pf_term_customization" placeholder="" type="text"> <span class="description">Once customized, customization key will appear. If you use matching filters in presets just copy and paste this key to get the same customization.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
