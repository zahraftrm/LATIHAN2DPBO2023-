<?php
    // library
    include "Mahasiswa.php";
    
    // welcome!
    echo ("<h4>===== Selamat Datang di Database Mahasiswa UPI =====</h4>");
    echo '<hr>';
    
    // banyaknya data
    $m = 5;

    // membuat array of object untuk kelas Human
    $arrHuman[0] = new Human("1800456712330987","Zahra Fitria", "P");
    $arrHuman[1] = new Human("1800456710030900", "Lili Rosalini", "P");
    $arrHuman[2] = new Human("1800458715030160", "Eli Nur Hayat", "P");
    $arrHuman[3] = new Human("1800456710130900", "Rudi Tabuti", "L");
    $arrHuman[4] = new Human("1800455711031770", "Toyyib Hasanuddin", "L");

    // menampilkan data kelas Human
    echo ("<b>(1) Isi Data Manusia: </b><br/><br/>");

    // perulangan untuk menampilkan
    for($i = 0; $i < $m; $i++) {
        echo ("# Data ke-").$i + "1".".<br/>";
        echo ("Nik      : ").$arrHuman[$i]->getNik()."<br/>";
        echo ("Nama     : ").$arrHuman[$i]->getNama()."<br/>";
        echo ("Jenis K. : ").$arrHuman[$i]->getJenkel()."<br/><br/>";
    }

    // membuat array of object untuk kelas SivitasAkademik
    $arrSivitas[0] = new SivitasAkademik("UPI", "zahrafitriia@upi.edu");
    $arrSivitas[1] = new SivitasAkademik("UPI", "liliirozaa@upi.edu");
    $arrSivitas[2] = new SivitasAkademik("UPI", "elinur100@upi.edu");
    $arrSivitas[3] = new SivitasAkademik("UPI", "ruditabooti@upi.edu");
    $arrSivitas[4] = new SivitasAkademik("UPI", "toyyibhasan@upi.edu");
   
    // menampilkan data kelas SivitasAkademik
    echo ("<b>(2) Isi Data Sivitas: </b><br/><br/>");

    // perulangan untuk menampilkan
    for($i = 0; $i < $m; $i++) {
        echo ("# Data ke-").$i + "1".".<br/>";
        echo ("Asal Univ.      : ").$arrSivitas[$i]->getAsal_Universitas()."<br/>";
        echo ("Email Edu       : ").$arrSivitas[$i]->getEmail_Edu()."<br/><br/>";
    }
    
    // membuat array of object untuk kelas Mahasiswa
    $arrMhs[0] = new Mahasiswa(2102545,"Zahra Fitria", "P", "FPMIPA", "Ilkom");
    $arrMhs[1] = new Mahasiswa(2102000,"Lili Rosalini", "P", "FPMIPA", "Ilkom");
    $arrMhs[2] = new Mahasiswa(2102650,"Eli Nur Hayat", "P", "FPMIPA", "Kimia");
    $arrMhs[3] = new Mahasiswa(2102500,"Rudi Tabuti", "L", "FPMIPA", "Biologi");
    $arrMhs[4] = new Mahasiswa(2102550,"Toyyib Hasanuddin", "L", "FPMIPA", "Matematika");
    
    // menampilkan data kelas Mahasiswa
    echo ("<b>(3) Isi Data Mahasiswa: </b><br/><br/>");

    // perulangan untuk menampilkan
    for($i = 0; $i < $m; $i++) {
        echo ("# Data ke-").$i + "1".".<br/>";
        echo ("Nim      : ").$arrMhs[$i]->getNim()."<br/>";
        echo ("Nama     : ").$arrMhs[$i]->getNama()."<br/>";
        echo ("Jenis K. : ").$arrMhs[$i]->getJenkel()."<br/>";
        echo ("Fakultas : ").$arrMhs[$i]->getFakultas()."<br/>";
        echo ("Prodi    : ").$arrMhs[$i]->getProdi()."<br/><br/>";
    }
?>