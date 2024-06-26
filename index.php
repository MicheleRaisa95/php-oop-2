<?php 
// Inclusione delle classi Product, Category, Game, Food
require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/game.php";
require_once __DIR__ . "/Models/food.php";
require_once __DIR__ . "/Models/cuccia.php";

// Creazione di un oggetto Category con il nome "Gatti"
$category_cat = new Category("Gatto");

// Creazione di un oggetto Category con il nome "Cane"
$category_dog = new Category("Cane");

// Creazione di un oggetto Product con l'ID 1, nome "letiera", prezzo 8.79 e categoria "Gatti"
$lettiera = new Product(1, "letiera", 8.79, $category_cat);

// Visualizzazione delle informazioni dell'oggetto Product creato
//var_dump($lettiera);

// Creazione di un oggetto Game 
$PallinaCane = new Game(2, "pallina", 2.0, $category_dog, "plastica");

// Visualizzazione delle informazioni dell'oggetto Game creato
//var_dump($PallinaCane);

// creazione di un oggetto Food

$cibo = new Food (3, "bastoncino",1.99, $category_dog, 1, 2024);

$cuccia = new Cuccia (4, "Cuccia", 60.50, $category_dog, 1.20, "Tessuto");

// Visualizzazione delle informazioni dell'oggetto Food creato
//var_dump($cibo);

// Aggiungo prodotti alla categoria "Gatto"
$category_cat->addProduct($lettiera);

// Aggiungo prodotti alla categoria "Cane"
$category_dog->addProduct($PallinaCane);

//aggiunta prodotto cibo con relativi valori
$category_cat->addProduct($cibo);

$category_dog->addProduct($cuccia);

// Visualizzazione delle informazioni dell'oggetto Game creato dopo aver aggiunto prodotti alla categoria
//var_dump($PallinaCane);

//stampo la lista di prodotti presenti alla categoria gatti
$category_cat->listProduct();
var_dump($category_cat);

//stampo la lista di prodotti presenti alla categoria cane
$category_dog->listProduct();
var_dump($category_dog);


// Stampo il nome e il prezzo dell'oggetto Game
//echo $PallinaCane->getName();
//echo $PallinaCane->getPrice();
?>
