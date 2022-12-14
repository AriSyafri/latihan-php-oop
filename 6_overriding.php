<?php

    class Produk {
        public $judul,
                $penulis,
                $penerbit,
                $harga;

        // ini magic method
        public function __construct( $judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
            return $str;
        }
    }

    class Komik extends produk {
        public $jmlHalaman;

        public function __construct($judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){
            parent::__construct($judul, $penulis,$penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk(){
            $str = "Komik : ". parent::getInfoProduk() ." - {$this-> jmlHalaman} Halaman.";
            return $str;
        }
    }

    class Game extends produk {

        public $waktuMain;

        public function __construct($judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
            parent::__construct($judul, $penulis,$penerbit , $harga);
            $this->waktuMain = $waktuMain;
        }

        public function getInfoProduk(){
            $str = "Game : " . parent::getInfoProduk() . " - {$this-> waktuMain} Waktu Main.";
            return $str;
        
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk){  //disini objek jadi tipe data
            $str = "{$produk->judul} | {$produk->getLabel()} | Rp. {$produk->harga})";
            return $str;
        } 
    }

    $produk3 = new Komik("Naruto","Ano","Jump",40000, 100);
    $produk4 = new Game("Uncharted", "Neil Druckman", "Sony", 250000,50);

    echo $produk3->getInfoProduk();
    echo "<br>";
    echo $produk4->getInfoProduk();





?>