<?php
// includo le classi
require_once __DIR__ . '../classes/Product.php';
require_once __DIR__ . '../classes/ProductCat.php';
require_once __DIR__ . '../classes/ProductDog.php';

// creo un finto database con i prodotti
$products = [
    new ProductDog('Cibo per cani', 'immagine del cibo', 20, 'Cibo'),
    new ProductDog('Osso da Masticare', 'Immagine ci osso da masticare', 10, 'Gioco'),
    new ProductCat('Cibo per gatti', 'immagine del cibo', 25, 'Cibo'),
    new ProductCat('Tiragraffi', 'Immagine del tiragraffi', 50, 'Gioco')
];