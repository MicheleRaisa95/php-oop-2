<?php
// Definizione della classe Product
    class Product {
        // Proprietà private della classe
        private int $id_product;// Identificativo univoco del prodotto
        private string $name;// Nome del prodotto
        private float $price;// Prezzo del prodotto
        private Category $category;// Categoria del prodotto, rappresentata da un oggetto Category


    // Costruttore della classe Product
    // Inizializza un nuovo oggetto Product con id, nome, prezzo e categoria
        public function __construct(int $new_id_product, string $new_name, float $new_price, Category $new_category )
        {
        // Assegna i valori passati come argomenti alle proprietà della classe
        $this->id_product = $new_id_product;
        $this->name = $new_name;
        $this->price = $new_price;
        $this->category = $new_category;
        }

     // Metodo per ottenere l'identificativo del prodotto
    public function getId() {
        return $this->id_product;
    }
      // Metodo per ottenere il nome del prodotto
    public function getName() {
        return $this->name;
    }

    // Metodo per ottenere il prezzo del prodotto
    public function getPrice() {
        return $this->price;
    }
    
    public function getCategory() {
        return $this->category;
    }
    }
?>