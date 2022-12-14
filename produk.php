<?php

    class Produk {
        public $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;


        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    $produk3 = new Produk();
    $produk3->judul = "One Piece";
    $produk3->penulis = "Echiro Oda";
    $produk3->penerbit = "Shounen";
    $produk3->harga = 50000;

    $produk4 = new Produk();
    $produk4->judul = "Assasin creed 1";
    $produk4->penulis = "Ari";
    $produk4->penerbit = "Sony";
    $produk4->harga = 100000;

    echo $produk4->getLabel();
    echo "<hr>";
    echo $produk3->getLabel();



?>