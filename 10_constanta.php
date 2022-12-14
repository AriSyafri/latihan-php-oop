<?php
    // define gabisa di dalam kelas jadi konstanta global
    // define('NAMA', 'Ari Syafri');
    // echo NAMA . "<br>";
    // const bisa di kelas
    // const UMUR = 32;
    // echo UMUR;

    // bagian pembuka coba
    // class Coba {
        // define('NAMA', 'Ari Syafri'); gabisa
    //     const NAMA = "Ari Syafri";
    // }

    // echo Coba::NAMA;
    // penutup coba

    // magic constant
    echo __LINE__ . "<br>";  //bagian line posisi sekarang
    echo __FILE__ . "<br>"; //bagian lokasi file
    
    function coba() {
        return __FUNCTION__;
    }

    echo coba();

    echo "<br>";
    class Coba2 {
        public $kelas = __CLASS__;
    }

    $obj = new Coba2;
    echo $obj->kelas;


?>