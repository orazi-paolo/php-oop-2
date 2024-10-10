<?php
// includo le classi
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/ProductCat.php';
require_once __DIR__ . '/../classes/ProductDog.php';

// creo un finto database con i prodotti
$products = [
    new ProductDog('Cibo per cani', 'https://www.nutrixpiu.it/wp-content/uploads/2018/09/CANI-DA-SEGUITA_15KG-731x1024.png', 20, 'Cibo'),
    new ProductDog('Osso da Masticare', 'https://www.brekz.it/38654/large_default.jpg', 10, 'Gioco'),
    new ProductCat('Cibo per gatti', 'https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg', 25, 'Cibo'),
    new ProductCat('Tiragraffi', 'https://m.media-amazon.com/images/I/81GmLQje6xL._AC_UF1000,1000_QL80_.jpg', 50, 'Gioco')
];