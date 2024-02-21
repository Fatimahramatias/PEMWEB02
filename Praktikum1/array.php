<?php
// array indexing
$mhs1 = ['011', 'Fatimah Ramatias', 'Sistem Informasi', [3.5, 3.7, 4.0]];

//panggil array
echo 'Nama: ' . $mhs1[1] . '<br>'; //menggabungkan dua string (konkatenansi string)
echo "NIM: $mhs1[0] <br>";
echo "IPS semester 1: " . $mhs1[3][0]; //untuk mengambil data array di dalam array bisa menggunakan kurung kotak 2 kali