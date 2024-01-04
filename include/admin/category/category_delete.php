<?php
    include_once "../display/header.php";
    include_once "../display/slider.php";
    include_once "category.php";

    $category = new category;

    $category_id = isset($_GET['category_id'])?(string)(int)$_GET['category_id']:false;
    
    $delete_category = $category -> delete_category($category_id);

?>

