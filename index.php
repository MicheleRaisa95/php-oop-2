<?php 
// Inclusione delle classi Product, Category e Game
require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/game.php";

// Creazione di un oggetto Category con il nome "Gatti"
$category_cat = new Category("Gatti");

// Creazione di un oggetto Category con il nome "Cane"
$category_dog = new Category("Cane");

// Creazione di un oggetto Product con l'ID 1, nome "letiera", prezzo 8.79 e categoria "Gatti"
$lettiera = new Product(1, "letiera", 8.79, $category_cat);

// Visualizzazione delle informazioni dell'oggetto Product creato
var_dump($lettiera);

// Creazione di un oggetto Game 
$PallinaCane = new Game(2, "pallina", 2.0, $category_dog, "plastica");

// Visualizzazione delle informazioni dell'oggetto Game creato
var_dump($PallinaCane);

// Aggiungo prodotti alla categoria "Cane"
$category_dog->addProduct("casetta");
$category_dog->addProduct("cuscino");

// Visualizzazione delle informazioni dell'oggetto Game creato dopo aver aggiunto prodotti alla categoria
var_dump($PallinaCane);


// Stampo il nome e il prezzo dell'oggetto Game
//echo $PallinaCane->getName();
//echo $PallinaCane->getPrice();
?>
