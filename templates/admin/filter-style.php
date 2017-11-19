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
            <th class="">Ajax</th>
            <td class="">
                <fieldset>
                    <input name="apply_ajax" id="apply_ajax" class="" value="1" type="checkbox">
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
                        <option value="id">ID</option>
                        <option value="name">Name</option>
                        <option value="slug">Slug</option>
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
                        <option value="asc">Ascending</option>
                        <option value="desc">Descending</option>
                    </select>
                    <label for="order_result_direction">
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
