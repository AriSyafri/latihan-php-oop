<?php

    class Produk {
        public $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman,
                $waktuMain,
                $tipe;


        // ini magic method
        public function __construct( $judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = "harga",$jmlHalaman = 0, $waktuMain = 0, $tipe) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap(){
            $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (RP. {$this->harga})";

            if ($this->tipe == "komik") {
                $str .= " - {$this->jmlHalaman} Halaman";
            } else if ($this-> tipe == "game") {
                $str .= " - {$this->waktuMain} jam.";
            }


            return $str;
        }
    }

    class CetakInfoProduk {

        public function cetak(Produk $produk){  //disini objek jadi tipe data
            $str = "{$produk->judul} | {$produk->getLabel()} | Rp. {$produk->harga})";
            return $str;
        } 
    }

    $produk3 = new Produk("Naruto","Ano","Jump",40000, 100,0, "komik");
    $produk4 = new Produk("Uncharted", "Neil Druckman", "Sony", 250000,0,50,"game");

    echo $produk3->getInfoLengkap();
    echo "<br>";
    echo $produk4->getInfoLengkap();





?>