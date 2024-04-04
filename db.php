<?php

require './Models/Product.php';
require './Models/Category.php';
require './Models/Traits/Sizeable.php';
require './Models/Traits/Weightable.php';
require './Models/Food.php';
require './Models/Game.php';
require './Models/Kennel.php';


$foods = [
    $product1 = new Food(
        new Category("Cane", "fa-dog"),
        "Alimento secco completo per cani adulti",
        "Amazon",
        41.59,
        "https://m.media-amazon.com/images/I/61+Nx3n6IcL._AC_SL1500_.jpg",
        "20Kg",
        "Agnello e Riso",
        1
    ),
    
    $product2 = new Food (
        new Category("Gatto", "fa-cat"),
        "Cibo per Gatti Sterilizzati con Salmoni",
        "Ultima",
        15.87,
        "https://m.media-amazon.com/images/I/71-6dEFKspS._AC_SL1500_.jpg",
        "3Kg",
        "Salmone",
        1
    ),
    
    $product3 = new Food (
        new Category("Gatto", "fa-cat"),
        "Purina Gourmet Gold Mousse",
        "Gourmet",
        14.59,
        "https://m.media-amazon.com/images/I/71w3acHumiL._AC_SL1500_.jpg",
        "85g",
        "Pollo",
        24
    )
];

$games = [
    $product4 = new Game (
        new Category("Cane", "fa-dog"),
        "Corda da Masticare Resistenti e Lavabili per La Pulizia dei Denti",
        "Wimypet",
        12.99,
        "https://m.media-amazon.com/images/I/81vKiYW4lmS._AC_SL1500_.jpg",
        "Picola o media taglia",
        "Giocattolo da masticare"
    ),
    
    $product5 = new Game (
        new Category("Gatto", "fa-cat"),
        "Tiragraffi per Gatto Albero Tiragraffi",
        "Lionto",
        32.95,
        "https://m.media-amazon.com/images/I/611vVt+xQxL._AC_SL1500_.jpg",
        "Tutte le taglie",
        "Vita in casa"
    ),

    $product6 = new Game (
        new Category("Cane", "fa-dog"),
        "Gioco di intelligenza per cani - Gioco di strategia con attività per cani, flip board",
        "trixie",
        8.69,
        "https://m.media-amazon.com/images/I/613cp35wyiL._AC_SL1500_.jpg",
        "Tutte le taglie",
        "Rompicapo"
    )
];

$kennels = [
    $product7 = new Kennel (
        new Category("Gatto", "fa-cat"),
        "Cuccia per gatti a ciambella, 40 cm, calmante, soffice peluche con fondo antiscivolo, cuscino lavabile, morbido e anti paura per gatti",
        "TOHDNC",
        13.99,
        "https://m.media-amazon.com/images/I/81JIozADAPL._AC_SL1500_.jpg",
        "Tutte le taglie",
        "2kg",
        "40cm"
    ),
    
    $product8 = new Kennel (
        new Category("Cane", "fa-dog"),
        "Amazon Basics Cane Lettino rialzato rinfrescante per animali domestici, stoffa",
        "Amazon",
        22.46,
        "https://m.media-amazon.com/images/I/61hBb9nFtxS._AC_SX522_.jpg",
        "Razze piccole",
        "3kg",
        "90cm x 55cm x 19cm"
    ),

    $product9 = new Kennel (
        new Category("Cane", "fa-dog"),
        "Bedsure Letto per Cani Grande 89x63x18cm - Divano per Cani Taglia Gande in Uovo Foam, Colore Grigio, Cuscino per Cani Sfoderabile e Lavabile",
        "Bedsure",
        57.99,
        "https://m.media-amazon.com/images/I/714QScIqOfL.__AC_SX300_SY300_QL70_ML2_.jpg",
        "Razze di taglia grande",
        "5kg",
        "89 x 63 x 17"
    )
];