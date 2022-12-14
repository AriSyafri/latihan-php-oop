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

    class CetakInfoProduk {

        public function cetak(Produk $produk){  //disini objek jadi tipe data
            $str = "{$produk->judul} | {$produk->getLabel()} | Rp. {$produk->harga})";
            return $str;
        } 
    }

    $produk3 = new Produk("Sonic","Ano","Sega",40000);
    $produk4 = new Produk();

    echo $produk4->getLabel();
    echo "<br>";
    echo $produk3->getLabel();
    echo "<br>";
    $infoProduk3 = new CetakInfoProduk();
    echo $infoProduk3->cetak($produk3);
    
    //echo $infoProduk3->cetak("dkkeke"); // ini gabisa karena harus class produk

?>