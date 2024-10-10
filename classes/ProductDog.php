<?php
// includo la classe product
require_once __DIR__ . '/Product.php';

// creo la classe specifica per i prodotti per i cani figlia di Product
class ProductDog extends Product
{
    public function __construct($title, $image, $price, $type)
    {
        // associo al costruttore del padre
        parent::__construct($title, $image, $price, 'Icona per i cani', $type);
    }
}