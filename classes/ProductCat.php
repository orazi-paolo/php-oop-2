<?php
// includo la classe product
require_once __DIR__ . '/Product.php';

// creo la classe specifica per i prodotti per i gatti figlia di Product
class ProductCat extends Product
{

    public function __construct($title, $image, $price, $type)
    {
        // associo al costruttore del padre
        parent::__construct($title, $image, $price, 'https://img.freepik.com/vettori-gratuito/carina-icona-di-gatto-nero-isolata_24640-134010.jpg', $type);
    }
}