<?php
    class contoh{
        public static $angka = 1, $angka2 = 1;
        
        public function halo(){
            return "halo".self::$angka++."kali. <br>";
        }

        public static function halo2(){
            return "halo ".self::$angka2++." kali. <br>";
        }
    }
    echo "<h2>Static dan non-Static</h2>";
    $obj = new contoh();
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<hr>";
    $obj2 = new contoh();
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<h2>Full Static</h2>";
    echo contoh::halo2();
    echo contoh::halo2();
    echo contoh::halo2();
?>