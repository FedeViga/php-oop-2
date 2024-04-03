<?php

require './Models/Product.php';
require './Models/Category.php';
require './Models/Food.php';


$product1 = new Food(
    new Category("Cane"),
    "Alimento secco completo per cani adulti ricco di agnello e riso",
    "Amazon",
    41.59,
    "https://m.media-amazon.com/images/I/61+Nx3n6IcL._AC_SL1500_.jpg",
    "20 Kg",
    "Agnello e Riso"
);

$product2 = new Food (
    new Category("Gatto"),
    "Cibo per Gatti Sterilizzati con Salmoni",
    "Ultima",
    15.87,
    "https://m.media-amazon.com/images/I/71-6dEFKspS._AC_SL1500_.jpg",
    "3 kg",
    "Salmone"
);

var_dump($product1);
var_dump($product2);