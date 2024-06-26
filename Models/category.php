<?php
// Definizione della classe Category
class Category {
    // Proprietà privata per il nome della categoria
    private $name;
    private $products = [];


    // Costruttore della classe Category
    // Inizializza la proprietà $nome con il valore passato come argomento
    public function __construct($_name) {
        $this->name = $_name;
    }
    
    public function addProduct($_product) {
        $this->products[] = $_product;
    }

    public function listProduct() {
        $output = [];
        foreach ($this->products as $product) {
            $output[] = (string) $product;
        }
        return $output;
    }

     // Metodo per ottenere il nome della categoria
    public function getNome() {
        return $this->name;
    }

    public function getProduct() {
        return $this->products;
    }
}
?>