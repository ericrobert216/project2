<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */
?>

<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th class="titledesc">Alway Visible</th>
                <td class="forminp forminp-checkbox">
                    <fieldset>
                        <input name="alway_visible" id="alway_visible" class="" value="1" type="checkbox">
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
                        <input name="instant_filtering" id="instant_filtering" class="" value="1" type="checkbox">
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
                        <input name="show_product_count" id="show_product_count" class="" value="1" type="checkbox">
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
                        <input name="show_search_field" id="show_search_field" class="" value="1" type="checkbox">
                        <label for="show_search_field">
                            Description
                        </label>
                    </fieldset>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Submit">
    <?php wp_nonce_field( 'save_setting', 'zoo_ln_nonce_setting' ); ?>
</form>
