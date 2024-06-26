<?php
    class Product {
        // proprieta classe
        private int $id_product;
        private string $name;
        private float $price;
        private Category $category;

        // creo un prodotto che ha come attributi prezzo,nome e categoria e numero indentificativo
        public function __construct(int $new_id_product, string $new_name, float $new_price, Category $new_category )
        {
        $this->id_product = $new_id_product;
        $this->name = $new_name;
        $this->price = $new_price;
        $this->category = $new_category;
        }

    public function getId() {
        return $this->id_product;
    }

    public function getNome() {
        return $this->name;
    }

    public function getPrezzo() {
        return $this->price;
    }
    }
?>