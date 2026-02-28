<?php

// SEGITIGA SIKU-SIKU
$alas = 6;
$tinggi = 8;

$luas_segitiga = 0.5 * $alas * $tinggi;
$keliling_segitiga = $alas + $tinggi + sqrt(($alas*$alas)+($tinggi*$tinggi));


// PERSEGI
$sisi = 5;

$luas_persegi = $sisi * $sisi;
$keliling_persegi = 4 * $sisi;


// PERSEGI PANJANG
$panjang = 10;
$lebar = 4;

$luas_pp = $panjang * $lebar;
$keliling_pp = 2 * ($panjang + $lebar);


// LINGKARAN
$r = 7;
$phi = 3.14;

$luas_lingkaran = $phi * $r * $r;
$keliling_lingkaran = 2 * $phi * $r;

echo "<h2>Perhitungan Bangun Datar</h2>";

echo "<h3>Segitiga Siku-siku</h3>";
echo "Luas : $luas_segitiga <br>";
echo "Keliling : $keliling_segitiga <br>";

echo "<h3>Persegi</h3>";
echo "Luas : $luas_persegi <br>";
echo "Keliling : $keliling_persegi <br>";

echo "<h3>Persegi Panjang</h3>";
echo "Luas : $luas_pp <br>";
echo "Keliling : $keliling_pp <br>";

echo "<h3>Lingkaran</h3>";
echo "Luas : $luas_lingkaran <br>";
echo "Keliling : $keliling_lingkaran <br>";

?>