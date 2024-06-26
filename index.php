<?php 
require_once __DIR__ . "/Models/product.php";

$lettiera = new Product(1, "letiera", 8.79, "gatti");
var_dump($lettiera)
?>