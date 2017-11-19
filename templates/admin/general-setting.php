<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */

$alway_visible = isset($data['alway_visible']) ? intval($data['alway_visible']) : 0;
$instant_filtering = isset($data['instant_filtering']) ? intval($data['instant_filtering']) : 0;
$show_product_count = isset($data['show_product_count']) ? intval($data['show_product_count']) : 0;
$show_search_field = isset($data['show_search_field']) ? intval($data['show_search_field']) : 0;

?>

<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th class="titledesc">Alway Visible</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <input name="alway_visible" id="alway_visible" class="" value="1" type="checkbox" <?php checked($alway_visible, 1);?>>
                        <label for="alway_visible">
                            Description
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th class="titledesc">Instant Filtering</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <input name="instant_filtering" id="instant_filtering" class="" value="1" type="checkbox" <?php checked($instant_filtering, 1);?>>
                        <label for="instant_filtering">
                            Description
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th class="titledesc">Show term product count</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <input name="show_product_count" id="show_product_count" class="" value="1" type="checkbox" <?php checked($show_product_count, 1);?>>
                        <label for="show_product_count">
                            Description
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th class="titledesc">Show term search Fields</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <input name="show_search_field" id="show_search_field" class="" value="1" type="checkbox" <?php checked($show_search_field, 1);?>>
                        <label for="show_search_field">
                            Description
                        </label>
                    </fieldset>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Submit">
    <?php wp_nonce_field( 'general_setting', 'zoo_ln_nonce_setting' ); ?>
</form>
