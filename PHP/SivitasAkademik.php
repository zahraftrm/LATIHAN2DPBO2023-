<?php

// library
include "Human.php";

// membuat kelas SivitasAkademik yang merupakan anak dari kelas Human
class SivitasAkademik extends Human {
    // atribut yang diperlukan
    private $asal_universitas = '';
    private $email_edu = '';

    // konstruktor dengan parameter
    public function __construct($asal_universitas, $email_edu) {
        // set nilainya
        $this->asal_universitas = $asal_universitas;
        $this->email_edu = $email_edu;
    }

    // tetapkan asal_universitas
    public function setAsal_Universitas($asal_universitas) {
        $this->asal_universitas = $asal_universitas;
    }

    // get asal_universitas
    public function getAsal_Universitas() {
        return $this->asal_universitas;
    }

    // tetapkan email_edu
    public function setEmail_Edu($email_edu) {
        $this->email_edu = $email_edu;
    }

    // get email_edu
    public function getEmail_Edu() {
        return $this->email_edu;
    }
    
    // deconstruct
    function __destruct() {

    }
}
?>