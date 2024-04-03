<?php

require './Models/Product.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Game.php';


$product1 = new Food(
    new Category("Cane"),
    "Alimento secco completo per cani adulti",
    "Amazon",
    41.59,
    "https://m.media-amazon.com/images/I/61+Nx3n6IcL._AC_SL1500_.jpg",
    20,
    "Agnello e Riso"
);

$product2 = new Food (
    new Category("Gatto"),
    "Cibo per Gatti Sterilizzati con Salmoni",
    "Ultima",
    15.87,
    "https://m.media-amazon.com/images/I/71-6dEFKspS._AC_SL1500_.jpg",
    3,
    "Salmone"
);

$product3 = new Game (
    new Category("Cane"),
    "Corda da Masticare Resistenti e Lavabili per La Pulizia dei Denti",
    "Wimypet",
    12.99,
    "https://m.media-amazon.com/images/I/81vKiYW4lmS._AC_SL1500_.jpg",
    "Picola o media taglia",
    "Giocattolo da masticare"
);

$product4 = new Game (
    new Category("Gatto"),
    "Tiragraffi per Gatto Albero Tiragraffi",
    "Lionto",
    32.95,
    "https://m.media-amazon.com/images/I/611vVt+xQxL._AC_SL1500_.jpg",
    "Tutte le taglie",
    "Vita in casa"
);

$foods = [
    $product1,
    $product2
];

$games = [
    $product3,
    $product4
];