<?php

class Pasien {
    public $id,
           $kode,
           $nama,
           $tmp_lahir,
           $tgl_lahir,
           $email,
           $gender;

    public function __construct($kode, $nama, $gender) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
    }
}