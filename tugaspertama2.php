<?php
/**
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial (5) -> 5* 4 * 3 * 2 * 1 = 120 
 */

function faktorial ($x){
    $angka = 1;
    $faktorial = 1;
    while ($angka <= $x){
        $faktorial = $faktorial * $angka;
        $angka = $angka + 1;
    }
    return $faktorial;
}

echo faktorial (5);
?>