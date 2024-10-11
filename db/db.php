<?php
// includo le classi
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/ProductCat.php';
require_once __DIR__ . '/../classes/ProductDog.php';

// creo un finto database con i prodotti
$products = [];

try {
    $dogFood = new ProductDog('Cibo per cani', 'https://www.nutrixpiu.it/wp-content/uploads/2018/09/CANI-DA-SEGUITA_15KG-731x1024.png', 20, 'Cibo');
    $products[] = $dogFood;
} catch (InvalidArgumentException $e) {
    // se il prezzo è negativo
    echo "<p>Errore: {$e->getMessage()}</p>";
}

try {
    $dogToy = new ProductDog('Osso da Masticare', 'https://www.brekz.it/38654/large_default.jpg', -2, 'Gioco');
    $products[] = $dogToy;
} catch (InvalidArgumentException $e) {
    echo "<p>Errore: {$e->getMessage()}</p>";
}

try {
    $catFood = new ProductCat('Cibo per gatti', 'https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg', 25, 'Cibo');
    $products[] = $catFood;
} catch (InvalidArgumentException $e) {
    echo "<p>Errore: {$e->getMessage()}</p>";
}

try {
    $catToy = new ProductCat('Tiragraffi', 'https://m.media-amazon.com/images/I/81GmLQje6xL._AC_UF1000,1000_QL80_.jpg', 50, 'Gioco');
    $products[] = $catToy;
} catch (InvalidArgumentException $e) {
    echo "<p>Errore: {$e->getMessage()}</p>";
}

// imposto grazie al trait anche tutte le descrizioni se ci sono i prodotti
if (isset($dogFood)) {
    $dogFood->setDescription('Cibo di alta qualità per cani');
}
if (isset($dogToy)) {
    $dogToy->setDescription('Osso naturale per divertimento e pulizia dei denti');
}
if (isset($catFood)) {
    $catFood->setDescription('Cibo per gatti di alta qualità');
}
if (isset($catToy)) {
    $catToy->setDescription('Tiragraffi robusto per gatti di tutte le taglie');
}