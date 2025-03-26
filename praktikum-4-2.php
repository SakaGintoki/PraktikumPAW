<?php
    function tambah($bil1, $bil2){
        return $bil1 + $bil2;
    }

    echo "Hasil Dari Fungsi tambah dengan 2 argument :";
    $hasil1 = tambah(10,9);
    $hasil2 = tambah(10.75,12.5);
    echo "\nHasil 1 dengan input (10, 9) : " , $hasil1;
    echo "\nHasil 2 dengan input (10.5, 12.5) : ", $hasil2;

    function panjangString($str){
        return strlen($str);
    }
    echo "\n\nHasil Dari Fungsi panjangString :";
    $hasilstr1 = panjangString("PHP-HelloWorld");
    $hasilstr2 = panjangString("SpeedRunLaprakPAW");
    echo "\nHasilstr1 dengan input (\"PHP-HelloWorld\") : " , $hasilstr1;
    echo "\nHasilstr2 dengan input (\"SpeedRunLaprakPAW\") : ", $hasilstr2;
?>