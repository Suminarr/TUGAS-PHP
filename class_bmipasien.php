<?php

require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BMIPasien {
    public $id,
           $bmi,
           $tanggal,
           $pasien;

    public function __construct($tanggal, $pasien, $bmi){
        $this->tanggal = $tanggal;
        $this->pasien = $pasien;
        $this->bmi = $bmi;
    }
}