<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:44 PM
 */
?>

<?php
    $item_type = 'attribute';
    $content_title = '';
    $attribute_ids = '';
    $add_new = 'multi';

    if (isset($item_data)) {
        $item_number = $item_data['item_number'];
        $sac = (array)reset($item_data['item_config_value']['filter_config_value']);
        $content_title = $sac['title'];
        $attribute_ids = $sac['attribute-ids'];
        $add_new = '';
    } else {
        $item_number = '__i__';
    }

    if (isset($array_multi_number[$item_type])) {
        $multi_number = $array_multi_number[$item_type];
    } else {
        $multi_number = 1;
    }

    $list_attribute = wc_get_attribute_taxonomies();

?>

<div id="attribute-<?php echo $item_number?>" class="item ui-draggable">
    <div class="item-top">
        <div class="item-title-action">
            <button type="button" class="item-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="item-title ui-draggable-handle">
            <h3>+ Attribute<span class="in-item-title"></span></h3>
        </div>
    </div>
    <div class="item-inside">
        <form method="post">
            <div class="item-content">
                <p>
                    <label for="attribute-<?php echo $item_number?>-title">Title</label>
                    <input class="widefat " id="attribute-<?php echo $item_number?>-title" name="attribute[<?php echo $item_number?>][title]" value="<?php echo($content_title);?>" type="text">
                </p>
                <p>
                    <label for="attribute-<?php echo $item_number?>-attribute-ids">Display type</label>
                    <select class="widefat " id="attribute-<?php echo $item_number?>-attribute-ids" name="attribute[<?php echo $item_number?>][attribute-ids]">
                        <?php
                            foreach ($list_attribute as $attribute) {
                                $attribute = (array)$attribute;
                                echo ('<option value="'.$attribute['attribute_name'].'" '.selected($attribute_ids,$attribute['attribute_name']).'>'.$attribute['attribute_label'].'</option>');
                            }
                        ?>
                    </select>
                </p>
            </div>
            <input name="item-id" class="item-id" value="attribute-<?php echo $item_number?>" type="hidden">
            <input name="item-type" class="item-type" value="<?php echo($item_type);?>" type="hidden">
            <input name="id_base" class="id_base" value="attribute" type="hidden">
            <input name="item-width" class="item-width" value="250" type="hidden">
            <input name="item-height" class="item-height" value="200" type="hidden">
            <input name="item_number" class="item_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="<?php echo $multi_number;?>" type="hidden">
            <input name="add_new" class="add_new" value="<?php echo($add_new);?>" type="hidden">
            <div class="item-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |
                    <button type="button" class="button-link item-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="saveitem" id="attribute-<?php echo $item_number?>-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
