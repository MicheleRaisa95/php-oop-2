<?php
// Definizione della classe Category
class Category {
    // Proprietà privata per il nome della categoria
    private $nome;


    // Costruttore della classe Category
    // Inizializza la proprietà $nome con il valore passato come argomento
    public function __construct($nome) 
    {
        $this-> nome = $nome;
    }
    
     // Metodo per ottenere il nome della categoria
    public function getNome() {
        return $this->nome;
    }
}
?>