<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/19/17
 * Time: 1:56 AM
 */
?>




<form action="" method="post">
    First name:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse">
    <br><br>

    <input type="submit" value="Submit">
    <?php wp_nonce_field( 'save_setting', 'zoo_ln_nonce_setting' ); ?>
</form>
