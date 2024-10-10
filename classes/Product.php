<?php
// Creo una classe madre

class Product
{
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