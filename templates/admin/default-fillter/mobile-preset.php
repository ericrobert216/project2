<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/17/17
 * Time: 12:40 AM
 */
?>


<div class="pf_element" data-filter="mobile">
    <span>Mobile Preset</span>
    <a href="#" class="prdctfltr_c_toggle"><i class="prdctfltr-down"></i></a>
    <div class="pf_options_holder">
        <h2>Mobile Preset</h2>
        <p>Setup mobile/handheld devices preset.<span class="wcpff_mobile"></span></p>
        <table class="form-table">
            <tbody>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_mobile_preset">Select Mobile Preset</label>
                </th>
                <td class="forminp forminp-select">
                    <select name="wc_settings_prdctfltr_mobile_preset" id="wc_settings_prdctfltr_mobile_preset" style="width:300px;margin-right:12px;" class="">
                        <option value="default" selected="selected">None</option>
                    </select>
                    <span class="description">Select mobile preset that will be shown on lower screen resolutions.</span>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row" class="titledesc">
                    <label for="wc_settings_prdctfltr_mobile_resolution">Set Mobile Resolution</label>
                </th>
                <td class="forminp forminp-number">
                    <input name="wc_settings_prdctfltr_mobile_resolution" id="wc_settings_prdctfltr_mobile_resolution" style="width:100px;margin-right:12px;" value="640" class="" placeholder="" min="640" max="1024" step="1" type="number"> <span class="description">Set screen resolution that wil trigger the mobile preset.</span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
