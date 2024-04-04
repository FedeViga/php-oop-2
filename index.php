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

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP OOP 2</title>
</head>

<body class="bg-dark text-white">
    
    <h1 class="text-center py-3">
        PHP OOP 2
    </h1>


    <div class="container">

    <?php 

    if ($error) {
        ?>
        <div class="alert alert-warning" role="alert">
            <?= $error ?>
        </div>
        <?php
    }

    ?>
        <!-- sezione cibi -->
        <section class="row py-3">
            <h2 class="text-center py-2">
                Cibi:
            </h2>
            <?php foreach($foods as $currentFood) {
                ?>
            <div class="col-4">
                <div class="card my_card h-100 py-2 px-4">
                    <i class="fa-solid <?= $currentFood->category->icon ?>"></i>
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
                        Gusto: <?= $currentFood->taste ?>
                    </h5>
                    <h5>
                        Peso: <?= $currentFood->weight ?>
                    </h5>
                    <h5>
                        Pezzi: <?= $currentFood->quantity ?>
                    </h5>
                </div>
            </div>
            <?php
            }
            ?>
        </section>

        <!-- sezione giochi -->
        <section class="row py-3">
            <h2 class="text-center py-2">
                Giochi:
            </h2>
            <?php foreach($games as $currentGame) {
                ?>
            <div class="col-4">
                <div class="card h-100 py-2 px-4">
                    <i class="fa-solid <?= $currentGame->category->icon ?>"></i>
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

        <!-- sezione cucce -->
        <section class="row py-3">
            <h2 class="text-center py-2">
                Cucce:
            </h2>
            <?php foreach($kennels as $currentKennel) {
                ?>
            <div class="col-4">
                <div class="card h-100 py-2 px-4">
                    <i class="fa-solid <?= $currentKennel->category->icon ?>"></i>
                    <img src="<?= $currentKennel->image ?>">
                    <h3>
                    <?= $currentKennel->name ?>
                    </h3>
                    <h4>
                        Marca: <?= $currentKennel->brand ?>
                    </h4>
                    <h5>
                        Prezzo: <?= $currentKennel->price ?>€
                    </h5>
                    <h5>
                        Taglia consigliata: <?= $currentKennel->animalSize ?>
                    </h5>
                    <h5>
                        Misure: <?= $currentKennel->measures ?>
                    </h5>
                    <h5>
                        Peso: <?= $currentKennel->weight ?>
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