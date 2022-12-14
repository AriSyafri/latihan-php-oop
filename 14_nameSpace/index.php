<?php

require_once 'App/init.php';
// $produk1 = new Komik("Naruto","Ano","Jump",40000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony", 250000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use app\Produk\User as ServiceUser;
use app\Service\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();



