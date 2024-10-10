<?php
// Creo una classe madre

class Product
{
    // creo le variabili d'istanza generali per ogni prodotto
    public $title;
    public $image;
    public $price;
    public $icon;
    public $type;

    // creo un costruttore per la classe
    public function __construct($title, $image, $price, $icon, $type)
    {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->icon = $icon;
        $this->type = $type;
    }
}