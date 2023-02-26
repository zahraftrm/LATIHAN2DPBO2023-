<?php

// library
include "SivitasAkademik.php";

// membuat kelas mahasiswa yang merupakan anak dari kelas SivitasAkademik
class Mahasiswa extends SivitasAkademik {
    // atribut yang diperlukan
    private $nim = 0;
    private $prodi = '';
    private $fakultas = '';

    // konstruktor dengan parameter
    public function __construct($nim, $nama, $jenkel, $fakultas, $prodi) {
        // set nilainya
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jenkel = $jenkel;
        $this->fakultas = $fakultas;
        $this->prodi = $prodi;
    }

    // tetapkan nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // get nim
    public function getNim() {
        return $this->nim;
    }

    // tetapkan fakultas
    public function setFakultas($fakultas) {
        $this->fakultas = $fakultas;
    }

    // get fakultas
    public function getFakultas() {
        return $this->fakultas;
    }

    // tetapkan prodi
    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }

    // get prodi
    public function getProdi() {
        return $this->prodi;
    }

    // deconstruct
    function __destruct() {

    }
}
?>