<?php 
// Inclusione classi Product, Category
require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";

// Creazione di un oggetto Category con il nome "Gatti"
$category_cat = new Category ("Gatti");

// Creazione di un oggetto Product con l'ID 1, nome "letiera", prezzo 8.79 e categoria "Gatti"
$lettiera = new Product(1, "letiera", 8.79, $category_cat);

// Visualizzazione delle informazioni dell'oggetto Product creato
var_dump($lettiera)
?>