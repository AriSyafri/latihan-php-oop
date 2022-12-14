<?php
    class Produk {
        public $judul,
                $penulis,
                $penerbit;
        protected $diskon = 0;
        private $harga;

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
            $str = "Komik : ". parent::getInfoProduk() ." - {$this-> jmlHalaman} Halaman.";
            return $str;
        }

        public function setDiskon($diskon){
            $this->diskon = $diskon;
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
    echo "<hr>";

    // jika kita memakai hak akses protected akan seperti ini jika public bisa diubah orang
    // $produk3->harga = 500;
    // echo "Harga sekarang di hek :v " . $produk3->harga;
    // echo "<br>";
    // echo $produk3->getInfoProduk();

    // btw cara atas ilegal


    $produk3->setDiskon(50);
    echo "harga komik " . $produk3->getHarga();
    echo "<br>";



?>