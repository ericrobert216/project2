<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 10/11/17
 * Time: 11:15 PM
 */

//include "default-fillter.php"
//require_once(ZOO_LN_TEMPLATES_PATH . 'admin/default-filter.php');

//include "filter-overwrite.php"

//include "advanced-option.php"

$menu_page_url = menu_page_url(ZOO_LN_ADMIN_MENU_SLUG, false);

?>

<h2 class="nav-tab-wrapper">
    <a href="<?php echo $menu_page_url.'&section=general'?>" class="nav-tab <?php if($_section == 'general') echo('nav-tab-active');?>">General Setting</a>
    <a href="<?php echo $menu_page_url.'&section=setting'?>" class="nav-tab <?php if($_section == 'setting') echo('nav-tab-active');?>">Filter Setting</a>
    <a href="<?php echo $menu_page_url.'&section=style'?>" class="nav-tab <?php if($_section == 'style') echo('nav-tab-active');?>">Filter Style</a>
    <a href="<?php echo $menu_page_url.'&section=advanced'?>" class="nav-tab <?php if($_section == 'advanced') echo('nav-tab-active');?>">Advanced Setting</a>
</h2>
