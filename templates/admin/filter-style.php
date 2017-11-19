<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */

$filter_view_style = isset($data['filter_view_style']) ? strval($data['filter_view_style']) : 'horizontal';
?>

<form action="" method="post">
    <table class="form-table">
        <tbody>
        <tr>
            <th class="">Filter view style:</th>
            <td class="">
                <fieldset>
                    <select name="filter_view_style" id="filter_view_style">
                        <option value="horizontal" <?php selected($filter_view_style, 'horizontal'); ?>>Horizontal</option>
                        <option value="vertical" <?php selected($filter_view_style, 'vertical'); ?>>Vertical</option>
                    </select>
                    <label for="filter_view_style">
                        Description
                    </label>
                </fieldset>
            </td>
        </tr>
        </tbody>
    </table>
    <input type="submit" value="Save">
    <?php wp_nonce_field( 'filter_style', 'zoo_ln_nonce_setting' ); ?>
</form>
