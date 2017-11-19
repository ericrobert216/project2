<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */

$apply_ajax = isset($data['apply_ajax']) ? strval($data['apply_ajax']) : 0;
$order_result_by = isset($data['order_result_by']) ? strval($data['order_result_by']) : 'id';
$order_result_direction = isset($data['order_result_direction']) ? strval($data['order_result_direction']) : 'asc';
?>

<form action="" method="post">
    <table class="form-table">
        <tbody>
        <tr>
            <th class="">Ajax</th>
            <td class="">
                <fieldset>
                    <input name="apply_ajax" id="apply_ajax" class="" value="1" type="checkbox" <?php checked($apply_ajax, 1);?>>
                    <label for="apply_ajax">
                        Description
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr>
            <th class="">Order result by:</th>
            <td class="">
                <fieldset>
                    <select name="order_result_by" id="order_result_by">
                        <option value="id" <?php selected($order_result_by, 'id'); ?>>ID</option>
                        <option value="name" <?php selected($order_result_by, 'name'); ?>>Name</option>
                        <option value="slug" <?php selected($order_result_by, 'slug'); ?>>Slug</option>
                    </select>
                    <label for="order_result_by">
                        Description
                    </label>
                </fieldset>
            </td>
        </tr>
        <tr>
            <th class="">Order direction:</th>
            <td class="">
                <fieldset>
                    <select name="order_result_direction" id="order_result_direction">
                        <option value="asc" <?php selected($order_result_direction, 'asc'); ?>>Ascending</option>
                        <option value="desc" <?php selected($order_result_direction, 'desc'); ?>>Descending</option>
                    </select>
                    <label for="order_result_direction">
                        Description
                    </label>
                </fieldset>
            </td>
        </tr>
        </tbody>
    </table>
    <input type="submit" value="Save">
    <?php wp_nonce_field( 'advanced_setting', 'zoo_ln_nonce_setting' ); ?>
</form>
