<?php

// tanpa autoloading
// require_once 'app/Produk/InfoProduk.php';
// require_once 'app/Produk/Produk.php';
// require_once 'app/Produk/Game.php';
// require_once 'app/Produk/Komik.php';
// require_once 'app/Produk/CetakInfoProduk.php';
// require_once 'app/Produk/User.php';

// require_once 'app/Service/User.php';

// ini make autoloading
// fungsi melihat ada kelas apa aja di produk
spl_autoload_register(function ( $class ) {
    // app\Produk\User = ["app", "Produk", "User"]
    $class = explode('\\', $class);
    $class = end($class); 
    require_once __DIR__ . '/Produk/' . $class .'.php';
});

spl_autoload_register(function ( $class ) {
    $class = explode('\\', $class);
    $class = end($class); 
    require_once __DIR__ . '/Service/' . $class .'.php';
});