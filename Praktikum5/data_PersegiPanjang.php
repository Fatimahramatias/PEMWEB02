<?php
require_once('class_PersegiPanjang.php');

//Instalasi object Lingkaran
$PersegiPanjang1 = new PersegiPanjang (5, 8);
$PersegiPanjang2 = new PersegiPanjang (10, 20);

// Panggil method
echo "<br>Luas Persegi Panjang 1: " .$PersegiPanjang1->getLuas();
echo "<br>Luas Persegi Panjang 2: " .$PersegiPanjang2->getLuas();


echo "<br>Keliling Persegi Panjang 1: " .$PersegiPanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang 2: " .$PersegiPanjang2->getKeliling();