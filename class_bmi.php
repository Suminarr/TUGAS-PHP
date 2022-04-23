<?php

class BMI {
    public $berat,
           $tinggi,
           $nilai,
           $status;

    public function nilaiBMI() {
        $this->nilai = $this->berat / ($this->tinggi^2);
        return $this->nilai;
    }

    public function statusBMI() {
        if($this->nilai <= 18.5){
            return 'Kekurangan Berat Badan';
        }elseif($this->nilai >= 18.6 && $this->nilai <= 23.9){
            return 'Normal (Ideal)';
        }elseif($this->nilai >= 24 && $this->nilai <= 26.9){
            return 'Kelebihan Berat Badan';
        }else{
            return 'Obesitas';
        }

    }

    public function __construct($berat){
        $this->berat = $berat;
    }
}