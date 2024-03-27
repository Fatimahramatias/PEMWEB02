<?php
class PersegiPanjang{
    /**
     * Access Modifier:
     * 1. public: properti/method dapat diakses dimanapun
     * 2. private: properti/method hanya dapat diakses di dalam class tsb
     * 3. protected: mirip seperti private, tetapi dapat  diakses juga oleh child class
     */

     // properti atau varibel
     private $panjang;
     private $lebar;
    

     //method: function yg berada di dalam class
     //constructor: method yang otomatis berjalan ketika objek dibuat
     public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function getLuas(){
        return $this->panjang * $this->lebar;
    }
    public function getKeliling(){
        return 2 * $this->panjang + $this->lebar;
    }
    }








    
