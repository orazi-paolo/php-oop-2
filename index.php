<?php

// includo il database
require __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="text-center p-4">
        <h1>
            E-commerce Pets
        </h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                <div class="col-4 mb-3">
                    <div class="card h-100">
                        <img src="<?php echo $product->image ?>" alt=" <?php echo $product->title ?>">
                        <div class="card-body">
                            <img src="<?php echo $product->icon ?>" alt="<?php echo $product->title ?>">
                            <h5 class="card-title"> <?php echo $product->title ?> </h5>
                            <p> <?php echo $product->getDescription() ?></p>
                            <p class="card-text">Prezzo: <?php echo $product->price ?> $</p>
                            <p class="card-text">Tipologia: <?php echo $product->type ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>