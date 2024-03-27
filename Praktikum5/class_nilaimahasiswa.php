<?php
class NilaiMahasiswa
{
    var $nim;
    var $matakuliah;
    var $nilai;
   

    public function __construct($nim, $matakuliah, $nilai,)
    {
        $this->nim = $nim;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
      
    }

    public function tampilkanData() {
        echo "NIM: " . $this->nim;
        echo "<br> Mata Kuliah: " . $this->matakuliah;
        echo "<br> Nilai: " . $this->nilai;
    }

    public function cekHasil()
    {
        if ($this->nilai >= 56) {
            return "LULUS";
        } else {
           return  "TIDAK LULUS";
        }
    }

    public function cekGrade()
    {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        }else { 
            return "E";
        }
       
    }
}

?>
