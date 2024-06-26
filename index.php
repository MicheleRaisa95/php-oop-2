<?php 
require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";


$category_cat = new Category ("Gatti");

$lettiera = new Product(1, "letiera", 8.79, $category_cat);
var_dump($lettiera)
?>