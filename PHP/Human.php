<?php

// membuat kelas Human
class Human {
    // atribut yang diperlukan
    private $nik = 0;
    public $nama = '';
    public $jenkel = '';

    // konstruktor dengan parameter
    public function __construct($nik, $nama, $jenkel) {
        // set nilainya
        $this->nik = $nik;
        $this->nama = $nama;
        $this->jenkel = $jenkel;
    }

    // tetapkan nik
    public function setNik($nik) {
        $this->nik = $nik;
    }

    // get nik
    public function getNik() {
        return $this->nik;
    }

    // tetapkan nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // get nama
    public function getNama() {
        return $this->nama;
    }

    // tetapkan jenkel
    public function setJenkel($jenkel) {
        $this->jenkel = $jenkel;
    }

    // get jenkel
    public function getJenkel() {
        return $this->jenkel;
    }

    // deconstruct
    function __destruct() {

    }
}
?>