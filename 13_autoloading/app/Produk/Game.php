<?php

    class Game extends Produk implements InfoProduk {

        public $waktuMain;

        public function __construct($judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
            parent::__construct($judul, $penulis,$penerbit , $harga);
            $this->waktuMain = $waktuMain;
        }

        public function getInfo() {
            $str = "{$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
            return $str;
        }

        public function getInfoProduk(){
            $str = "Game : " . $this->getInfo() . " - {$this-> waktuMain} Waktu Main.";
            return $str;
        }
    }