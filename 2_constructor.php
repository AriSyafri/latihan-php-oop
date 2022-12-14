<?php

    class Produk {
        public $judul,
                $penulis,
                $penerbit,
                $harga;


        // ini magic method
        public function __construct( $judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = "harga") {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    $produk3 = new Produk("Sonic","Ano","Sega",40000);
    $produk4 = new Produk();

    echo $produk4->getLabel();
    echo "<br>";
    echo $produk3->getLabel();



?>