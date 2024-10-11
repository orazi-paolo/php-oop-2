<?php
// Creo una classe madre
// includo il trait che ho utilizzato nel padre per poterlo utilizzare poi anche su tutti i figli
require_once __DIR__ . "/../trait/Description.php";

class Product
{
    use Description;
    // creo le variabili d'istanza generali per ogni prodotto
    public string $title;
    public string $image;
    public float $price;
    public string $icon;
    public string $type;

    // creo un costruttore per la classe
    public function __construct(string $title, string $image, float $price, string $icon, string $type)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->icon = $icon;
        $this->type = $type;
    }
}