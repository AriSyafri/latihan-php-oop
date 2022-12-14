<?php

    class Produk {
        public $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman,
                $waktuMain;

        // ini magic method
        public function __construct( $judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = "harga",$jmlHalaman = 0, $waktuMain = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
            return $str;
        }
    }

    class Komik extends Produk {
        public function getInfoKomik(){
            $str = "Komik : {$this->getInfoProduk()} - {$this-> jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        public function getInfoGame(){
            $str = "Game : {$this->getInfoProduk()} - {$this-> waktuMain} Waktu Main.";
            return $str;
        
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk){  //disini objek jadi tipe data
            $str = "{$produk->judul} | {$produk->getLabel()} | Rp. {$produk->harga})";
            return $str;
        } 
    }

    $produk3 = new Komik("Naruto","Ano","Jump",40000, 100,0);
    $produk4 = new Game("Uncharted", "Neil Druckman", "Sony", 250000,0,50);

    echo $produk3->getInfoKomik();
    echo "<br>";
    echo $produk4->getInfoGame();





?>