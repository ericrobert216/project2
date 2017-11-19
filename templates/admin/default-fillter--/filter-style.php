<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:35 AM
 */
?>


<div class="pf_element" data-filter="style">
    <span>Filter Style</span>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <div class="pf_options_holder">
        <h2>Filter Style</h2>
        <p>Setup filter style settings.<span class="wcpff_style"></span></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_style_preset">Select Style</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_style_preset" id="wc_settings_prdctfltr_style_preset" style="width:300px;margin-right:12px;" class="">
                        <option value="pf_arrow">Arrow</option>
                        <option value="pf_arrow_inline">Arrow Inline</option>
                        <option value="pf_default" selected="selected">Default</option>
                        <option value="pf_default_inline">Default Inline</option>
                        <option value="pf_select">Use Select Box</option>
                        <option value="pf_sidebar">Fixed Sidebar Left</option>
                        <option value="pf_sidebar_right">Fixed Sidebar Right</option>
                        <option value="pf_sidebar_css">Fixed Sidebar Left With Overlay</option>
                        <option value="pf_sidebar_css_right">Fixed Sidebar Right With Overlay</option>
                        <option value="pf_fullscreen">Full Screen</option>
                    </select>
                    <span class="description">Select style. This option does not work with the widget version.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_style_mode">Select Mode</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_style_mode" id="wc_settings_prdctfltr_style_mode" style="width:300px;margin-right:12px;" class="">
                        <option value="pf_mod_row">One Row</option>
                        <option value="pf_mod_multirow" selected="selected">Multiple Rows</option>
                        <option value="pf_mod_masonry">Masonry Filters</option>
                    </select>
                    <span class="description">Select mode to use with the filter.. This option does not work with the widget version.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_max_columns">Max Columns</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="wc_settings_prdctfltr_max_columns" id="wc_settings_prdctfltr_max_columns" style="width:100px;margin-right:12px;" value="3" class="" placeholder="" min="1" max="100" step="1" type="number"> <span class="description">This option sets the number of columns for the filter. This option does not work with the widget version or the fixed sidebar layouts.</span>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Limit Max Height</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Limit Max Height</span></legend>
                        <label for="wc_settings_prdctfltr_limit_max_height">
                            <input name="wc_settings_prdctfltr_limit_max_height" id="wc_settings_prdctfltr_limit_max_height" class="" value="1" type="checkbox"> Check this option to limit the Max Height of for the filters.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_max_height">Max Height</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="wc_settings_prdctfltr_max_height" id="wc_settings_prdctfltr_max_height" style="width:100px;margin-right:12px;" value="150" class="" placeholder="" min="100" max="300" step="1" type="number"> <span class="description">Set the Max Height value.</span>
                </td>
            </tr>
            <tr class="" valign="top">
                <th scope="row" class="titledesc">Use Custom Scroll Bars</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <legend class="screen-reader-text"><span>Use Custom Scroll Bars</span></legend>
                        <label for="wc_settings_prdctfltr_custom_scrollbar">
                            <input name="wc_settings_prdctfltr_custom_scrollbar" id="wc_settings_prdctfltr_custom_scrollbar" class="" value="1" type="checkbox"> Check this option to override default browser scroll bars with javascrips scrollbars in Max Height mode.						</label>
                    </fieldset>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_style_checkboxes">Select Checkbox Style</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_style_checkboxes" id="wc_settings_prdctfltr_style_checkboxes" style="width:300px;margin-right:12px;" class="">
                        <option value="prdctfltr_round" selected="selected">Round</option>
                        <option value="prdctfltr_square">Square</option>
                        <option value="prdctfltr_checkbox">Checkbox</option>
                        <option value="prdctfltr_system">System Checkboxes</option>
                    </select>
                    <span class="description">Select style for the term checkboxes.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_style_hierarchy">Select Hierarchy Style</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_style_hierarchy" id="wc_settings_prdctfltr_style_hierarchy" style="width:300px;margin-right:12px;" class="">
                        <option value="prdctfltr_hierarchy_circle" selected="selected">Circle</option>
                        <option value="prdctfltr_hierarchy_filled">Circle Solid</option>
                        <option value="prdctfltr_hierarchy_lined">Lined</option>
                        <option value="prdctfltr_hierarchy_arrow">Arrows</option>
                    </select>
                    <span class="description">Select style for hierarchy terms.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_button_position">Select Filter Buttons Position</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_button_position" id="wc_settings_prdctfltr_button_position" style="width:300px;margin-right:12px;" class="">
                        <option value="bottom" selected="selected">Bottom</option>
                        <option value="top">Top</option>
                        <option value="both">Both</option>
                    </select>
                    <span class="description">Select position of the filter buttons, top or bottom.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_icon">Override Filter Icon</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_icon" id="wc_settings_prdctfltr_icon" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Enter icon class to override the default Product Filter icon. Use icon class e.g. prdctfltr-filter or FontAwesome fa fa-shopping-cart or any other.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_title">Override Filter Title</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_title" id="wc_settings_prdctfltr_title" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override default filter heading (Filter Products).</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_submit">Override Filter Button Text</label>
                </th>
                <td class="forminp forminp-text">
                    <input name="wc_settings_prdctfltr_submit" id="wc_settings_prdctfltr_submit" style="width:300px;margin-right:12px;" value="" class="" placeholder="" type="text"> <span class="description">Override Filter selected, the default filter submit button text.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_loader">Select AJAX Loader Icon</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_loader" id="wc_settings_prdctfltr_loader" style="width:300px;margin-right:12px;" class="">
                        <option value="none">None</option>
                        <option value="css-spinner">Spinner CSS 1 - In Title</option>
                        <option value="css-spinner-01">Spinner CSS 2 - In Title</option>
                        <option value="css-spinner-02">Spinner CSS 3 - In Title</option>
                        <option value="css-spinner-03">Spinner CSS 4 - In Title</option>
                        <option value="css-spinner-04">Spinner CSS 5 - In Title</option>
                        <option value="css-spinner-05">Spinner CSS 6 - In Title</option>
                        <option value="css-spinner-full">Spinner CSS 1 - Fullscreen Overlay</option>
                        <option value="css-spinner-full-01" selected="selected">Spinner CSS 2 - Fullscreen Overlay</option>
                        <option value="css-spinner-full-02">Spinner CSS 3 - Fullscreen Overlay</option>
                        <option value="css-spinner-full-03">Spinner CSS 4 - Fullscreen Overlay</option>
                        <option value="css-spinner-full-04">Spinner CSS 5 - Fullscreen Overlay</option>
                        <option value="css-spinner-full-05">Spinner CSS 6 - Fullscreen Overlay</option>
                        <option value="audio">Audio DEPRECATED</option>
                        <option value="ball-triangle">Ball Triangle DEPRECATED</option>
                        <option value="bars">Bars DEPRECATED</option>
                        <option value="circles">Circles DEPRECATED</option>
                        <option value="grid">Grid DEPRECATED</option>
                        <option value="hearts">Hearts DEPRECATED</option>
                        <option value="oval">Oval DEPRECATED</option>
                        <option value="puff">Puff DEPRECATED</option>
                        <option value="rings">Rings DEPRECATED</option>
                        <option value="spinning-circles">Spining Circles DEPRECATED</option>
                        <option value="tail-spin">Tail Spin DEPRECATED</option>
                        <option value="three-dots">Three Dots DEPRECATED</option>
                    </select>
                    <span class="description">Select AJAX loader icon.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
