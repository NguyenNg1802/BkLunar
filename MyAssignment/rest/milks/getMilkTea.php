<?php
    //require_once('mysqli_connect.php');
    require_once '../common.php';
    $prod_type = "Milk";
    $sub_category = "Milk Tea";
    $products = getProducts($prod_type, $sub_category);
    echo $products;
?>