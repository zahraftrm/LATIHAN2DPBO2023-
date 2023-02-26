// library
#include <iostream>
#include "Mahasiswa.cpp"

int main() {
    // welcome!
    cout << "\n===== Selamat Datang di Database Mahasiswa UPI =====" << endl;

    // membuat array of objects untuk kelas Human
    Human iniHuman[5];

    // input data hardcode
    iniHuman[0] = Human("1800456712330987","Zahra Fitria", "P");
    iniHuman[1] = Human("1800456710030900", "Lili Rosalini", "P");
    iniHuman[2] = Human("1800458715030160", "Eli Nur Hayat", "P");
    iniHuman[3] = Human("1800456710130900", "Rudi Tabuti", "L");
    iniHuman[4] = Human("1800455711031770", "Toyyib Hasanuddin", "L");

    // keluarkan output
    cout << "\n== Data Manusia ==";

    for(int i = 0; i < 5; i++) {
        cout << "\n# Data Ke-" << i+1 << endl;
        cout << "NIK       : " << iniHuman[i].getNik() << "\nNama      : " << iniHuman[i].getNama() << "\nJenis K.  : " << iniHuman[i].getJenkel() << endl;
    }

    // membuat array of objects untuk kelas Sivitas Akademik
    SivitasAkademik iniSivitas[5];

    // input data hardcode
    iniSivitas[0] = SivitasAkademik("UPI", "zahrafitriia@upi.edu");
    iniSivitas[1] = SivitasAkademik("UPI", "liliirozaa@upi.edu");
    iniSivitas[2] = SivitasAkademik("UPI", "elinur100@upi.edu");
    iniSivitas[3] = SivitasAkademik("UPI", "ruditabooti@upi.edu");
    iniSivitas[4] = SivitasAkademik("UPI", "toyyibhasan@upi.edu");

    // keluarkan output
    cout << "\n== Data Sivitas Akademik ==";

    for(int i = 0; i < 5; i++) {
        cout << "\n# Data Ke-" << i+1 << endl;
        cout << "Univ. Asal  : " << iniSivitas[i].getAsal_Universitas() << "    ||    Email      : " << iniSivitas[i].getEmail_Edu() << endl;
    }

    // membuat array of objects untuk kelas Mahasiswa
    Mahasiswa iniMahasiswa[5];

    // input data hardcode
    iniMahasiswa[0] = Mahasiswa(2102545,"Zahra Fitria", "P", "FPMIPA", "Ilkom");
    iniMahasiswa[1] = Mahasiswa(2102000,"Lili Rosalini", "P", "FPMIPA", "Ilkom");
    iniMahasiswa[2] = Mahasiswa(2102650,"Eli Nur Hayat", "P", "FPMIPA", "Kimia");
    iniMahasiswa[3] = Mahasiswa(2102500,"Rudi Tabuti", "L", "FPMIPA", "Biologi");
    iniMahasiswa[4] = Mahasiswa(2102550,"Toyyib Hasanuddin", "L", "FPMIPA", "Matematika");

    // keluarkan output
    cout << "\n== Data Mahasiswa ==";

    for(int i = 0; i < 5; i++) {
        cout << "\n# Data Ke-" << i+1 << endl;
        cout << "NIM       : " << iniMahasiswa[i].getNim() << "\nNama      : " << iniMahasiswa[i].getNama() << "\nJenis K.  : " << iniMahasiswa[i].getJenkel() << "\nFakultas  : " << iniMahasiswa[i].getFakultas() << "\nProdi     : " << iniMahasiswa[i].getProdi() << endl;
    }

    return 0;
}