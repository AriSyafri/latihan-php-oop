<?php
    abstract class Produk {
        private $judul,
                $penulis,
                $penerbit,
                $harga,
                $diskon = 0;

        // ini magic method
        public function __construct( $judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = 0) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function setJudul($judul){
            $this->judul = $judul;
        }

        public function getJudul() {
            return $this->judul;
        }

        public function getPenulis() {
            return $this->penulis;
        }

        public function setPenulis($penulis){
            $this->penulis = $penulis;
        }

        public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
        }

        public function getPenerbit() {
            return $this->penerbit;
        }
        
        public function setHarga($harga) {
            $this->harga = $harga;
        }

        public function setDiskon($diskon) {
            $this->diskon = $diskon;
        }

        public function getDison() {
            return $this->diskon;
        }

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        abstract public function getInfoProduk();

        public function getInfo() {
            $str = "{$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
            return $str;
        }

        // private hanya kelas tertentu dan kelas utama
        public function getHarga() {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }
    }

    class Komik extends produk {
        public $jmlHalaman;

        public function __construct($judul ="judul", $penulis = "anonim",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){
            parent::__construct($judul, $penulis,$penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
        }
        public function getInfoProduk(){
            $str = "Komik : ". $this->getInfo() ." - {$this-> jmlHalaman} Halaman.";
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
            $str = "Game : " . $this->getInfo() . " - {$this-> waktuMain} Waktu Main.";
            return $str;
        }
    }

    class CetakInfoProduk {
        public $daftarProduk = array();

        public function tambahProduk(Produk $produk) {
            $this->daftarProduk[] = $produk;
        }
        
        public function cetak(){
            $str = "DAFTAR PRODUK : <br>";

            foreach($this->daftarProduk as $p) {
                $str .= "- {$p->getInfoProduk()} <br>";
            }
            return $str;
        } 
    }

    $produk1 = new Komik("Naruto","Ano","Jump",40000, 100);
    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony", 250000,50);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();

?>