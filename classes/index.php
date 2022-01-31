<?php
require __DIR__ .  "/classes/Product.php";
require __DIR__ .  "/classes/User.php";
require __DIR__ .  "/classes/Premium.php";

// users
$roberto = new User("Roberto", "Villani", "robertovillani58@gmail.com", "5342128965437898");
var_dump($roberto);

$samuele = new Premium("Samuele", "Madrigali", "samuele.madrigali@gmail.com", "4023489764567213");
var_dump($samuele);

// product
$pc = new Product("Macbook Air M1", "Chip Apple M1, Display Retina LED da 13,3 pollici, 8GB di memoria ram unificata, Unità SSD da 512GB, MacOs Monterey", 1200);
var_dump($pc);

$smartphone = new Product("Xiaomi Mi10 Pro", "Snapdragon 865, Adreno 650, 8 GB ram, 256 GB storage, Display 6,67 pollici Amoled", 450);
var_dump($smartphone);