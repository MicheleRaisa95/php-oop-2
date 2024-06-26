<?php
class Game extends Product {
    private string $material;

    // Costruttore della classe Game
    public function __construct(int $id, string $name, float $price, Category $category, string $material) {
        // Chiamata al costruttore della classe padre (Product)
        parent::__construct($id, $name, $price, $category);
        // Inizializzazione della proprietà material
        $this->material = $material;
    }

    // Metodo per ottenere il materiale del gioco
    public function getMaterial(): string {
        return $this->material;
    }
}
?>
