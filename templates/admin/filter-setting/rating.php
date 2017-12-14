<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 11/18/17
 * Time: 9:47 PM
 */
?>

<?php
    $item_type = 'rating';
    $add_new = 'multi';
    $content_title = '';
    $rating_slider_from = 0;
    $rating_slider_to = 5;

    if (isset($item_data)) {
        $item_number = $item_data['item_number'];
        $sac = (array)reset($item_data['item_config_value']['filter_config_value']);
        $content_title = $sac['title'];
        $rating_slider_from = $sac['rating-slider-from'];
        $rating_slider_to = $sac['rating-slider-to'];
        $add_new = '';
    } else {
        $item_number = '__i__';
    }

    if (isset($array_multi_number[$item_type])) {
        $multi_number = $array_multi_number[$item_type];
    } else {
        $multi_number = 1;
    }
?>

<div id="rating-<?php echo($item_number);?>" class="item ui-draggable">
    <div class="item-top">
        <div class="item-title-action">
            <button type="button" class="item-action hide-if-no-js" aria-expanded="false">
                <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
        </div>
        <div class="item-title ui-draggable-handle">
            <h3>Rating<span class="in-item-title"></span></h3>
        </div>
    </div>
    <div class="item-inside">
        <form method="post">
            <div class="item-content">
                <p>
                    <label for="rating-<?php echo($item_number);?>-title">Title</label>
                    <input class="widefat " id="rating-<?php echo($item_number);?>-title" name="rating[<?php echo($item_number);?>][title]" value="<?php echo($content_title)?>" type="text">
                </p>
                <p>
                    <label for="rating-<?php echo($item_number);?>-rating-slider-from">No rating from</label>
                    <input class="widefat " id="rating-<?php echo($item_number);?>-rating-slider-from" name="rating[<?php echo($item_number);?>][rating-slider-from]" type="number" step="1" min="1" max="" value="<?php echo($rating_slider_from);?>">
                </p>
                <p>
                    <label for="rating-<?php echo($item_number);?>-rating-slider-to">No rating to</label>
                    <input class="widefat " id="rating-<?php echo($item_number);?>-rating-slider-to" name="rating[<?php echo($item_number);?>][rating-slider-to]" type="number" step="1" min="1" max="" value="<?php echo($rating_slider_to);?>">
                </p>
            </div>
            <input name="item-id" class="item-id" value="rating-<?php echo($item_number);?>" type="hidden">
            <input name="id_base" class="id_base" value="rating" type="hidden">
            <input name="item-type" class="item-type" value="<?php echo($item_type);?>" type="hidden">
            <input name="item-width" class="item-width" value="250" type="hidden">
            <input name="item-height" class="item-height" value="200" type="hidden">
            <input name="item_number" class="item_number" value="-1" type="hidden">
            <input name="multi_number" class="multi_number" value="<?php echo($multi_number)?>" type="hidden"><!--no. of multi item-->
            <input name="add_new" class="add_new" value="<?php echo($add_new);?>" type="hidden">
            <div class="item-control-actions">
                <div class="alignleft">
                    <button type="button" class="button-link button-link-delete item-control-remove">Delete</button> |
                    <button type="button" class="button-link item-control-close">Close</button>
                </div>
                <div class="alignright">
                    <input name="saveitem" id="rating-<?php echo($item_number);?>-saveitem" class="button button-primary item-control-save right" value="Save" type="submit">			<span class="spinner"></span>
                </div>
                <br class="clear">
            </div>
        </form>
    </div>
    <div class="item-description">
        Description here.
    </div>
</div>
