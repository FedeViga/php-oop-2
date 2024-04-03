<?php

require './db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <title>PHP OOP 2</title>
</head>

<body class="bg-dark text-white">
    
    <h1 class="text-center py-5">
        PHP OOP 2
    </h1>

    <div class="container">

        <!-- sezione cibi -->
        <section class="row">
            <h2 class="text-center py-2">
                Cibi:
            </h2>
            <?php foreach($foods as $currentFood) {
                ?>
            <div class="col">
                <div class="card h-100 py-2 px-4">
                    <img src="<?= $currentFood->image ?>">
                    <h3>
                    <?= $currentFood->name ?>
                    </h3>
                    <h4>
                        Marca: <?= $currentFood->brand ?>
                    </h4>
                    <h5>
                        Prezzo: <?= $currentFood->price ?>€
                    </h5>
                    <h5>
                        Peso: <?= $currentFood->weight ?> KG
                    </h5>
                    <h5>
                        Gusto: <?= $currentFood->taste ?>
                    </h5>
                </div>
            </div>
            <?php
            }
            ?>
        </section>

        <!-- sezione giochi -->
        <section class="row">
            <h2 class="text-center py-2">
                Giochi:
            </h2>
            <?php foreach($games as $currentGame) {
                ?>
            <div class="col">
                <div class="card h-100 py-2 px-4">
                    <img src="<?= $currentGame->image ?>">
                    <h3>
                    <?= $currentGame->name ?>
                    </h3>
                    <h4>
                        Marca: <?= $currentGame->brand ?>
                    </h4>
                    <h5>
                        Prezzo: <?= $currentGame->price ?>€
                    </h5>
                    <h5>
                        Taglia consigliata: <?= $currentGame->animalSize ?>
                    </h5>
                    <h5>
                        Tipo: <?= $currentGame->gameType ?>
                    </h5>
                </div>
            </div>
            <?php
            }
            ?>
        </section>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>