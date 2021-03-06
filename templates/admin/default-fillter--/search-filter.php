<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:24 AM
 */
?>


<div class="pf_element" data-filter="search">
    <span>Search Filter</span><a href="#" class="prdctfltr_c_delete"><i class="prdctfltr-delete"></i></a><a href="#" class="prdctfltr_c_move"><i class="prdctfltr-move"></i></a><a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <div class="pf_options_holder">
        <h2 class="wcpfs_search_init">Search</h2>
        <p class="wcpfs_search_init">Setup filter. Check following link for more information. <a href="http://mihajlovicnenad.com/product-filter/documentation-and-full-guide-video/">Documentation &amp; Knowledge Base</a><span class="wcpfs_search"></span></p>
        <table class="form-table wcpfs_search_init">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_search_title">Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_search_title" id="wc_settings_prdctfltr_search_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override filter title. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_search_description">Filter Description</label>
                </th>
                <td class="forminp forminp-textarea">
                    <p style="margin-top:0">Enter description for the current filter. If entered small text will apprear just bellow the filter title.</p>
                    <textarea name="wc_settings_prdctfltr_search_description" id="wc_settings_prdctfltr_search_description" style="max-width:600px;margin-top:12px;min-height:90px;" class="" placeholder=""></textarea>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_search_placeholder">Override Search Filter Placeholder</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_search_placeholder" id="wc_settings_prdctfltr_search_placeholder" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Enter title for the search filter placeholder. If you leave this field empty default will be used.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
