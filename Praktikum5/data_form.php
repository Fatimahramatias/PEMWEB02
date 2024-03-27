<?php
require_once('class_nilaimahasiswa.php');

$nim = $_POST['nim'] ?? "";
$matakuliah = $_POST['matakuliah'] ?? "";
$nilai = $_POST['nilai'] ?? "";

if ($nim && $matakuliah && $nilai) {
    $NilaiMahasiswa = new NilaiMahasiswa($nim, $matakuliah, $nilai);

    // Tampilkan data mahasiswa dan nilai
    $NilaiMahasiswa->tampilkanData();

    // hasil ujian
    echo "<br> Grade: " . $NilaiMahasiswa->cekGrade();

    // status kelulusan
    echo "<br> Hasil Ujian: " . $NilaiMahasiswa->cekHasil();
}
?>