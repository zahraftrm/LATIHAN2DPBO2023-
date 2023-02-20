import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        // welcome!
        System.out.println("\n===== Selamat Datang di Database Mahasiswa UPI =====");

        // variabel menghitung
        int hitung = 1;

        // untuk kelas Human
        Human[] iniManusia = new Human[5];

        // input data hardcode
        iniManusia[0] = new Human("1800456712330987","Zahra Fitria", "P");
        iniManusia[1] = new Human("1800456710030900", "Lili Rosalini", "P");
        iniManusia[2] = new Human("1800458715030160", "Eli Nur Hayat", "P");
        iniManusia[3] = new Human("1800456710130900", "Rudi Tabuti", "L");
        iniManusia[4] = new Human("1800455711031770", "Toyyib Hasanuddin", "L");

        // keluarkan output
        System.out.println("\n== Data Manusia ==");

        for(int i = 0; i < 5; i++) {
            System.out.println("\n# Data Ke-" + hitung);
            System.out.println("NIK       : " + iniManusia[i].getNik() + "\nNama      : " + iniManusia[i].getNama() + "\nJenis K.  : " + iniManusia[i].getJenkel());
            hitung++;
        }

        // untuk kelas Sivitas Akademik
        SivitasAkademik[] iniSivitas = new SivitasAkademik[5];

        // input data hardcode
        iniSivitas[0] = new SivitasAkademik("UPI", "zahrafitriia@upi.edu");
        iniSivitas[1] = new SivitasAkademik("UPI", "liliirozaa@upi.edu");
        iniSivitas[2] = new SivitasAkademik("UPI", "elinur100@upi.edu");
        iniSivitas[3] = new SivitasAkademik("UPI", "ruditabooti@upi.edu");
        iniSivitas[4] = new SivitasAkademik("UPI", "toyyibhasan@upi.edu");

        // keluarkan output
        System.out.println("\n== Data Sivitas Akademik ==");

        hitung = 1;
        for(int i = 0; i < 5; i++) {
            System.out.println("\n# Data Ke-" + hitung);
            System.out.println("Univ. Asal  : " + iniSivitas[i].getAsal_Universitas() + "    ||    Email      : " + iniSivitas[i].getEmail_Edu());
            hitung++;
        }

        // untuk kelas Mahasiswa
        Mahasiswa[] iniMahasiswa = new Mahasiswa[5];

        // input data hardcode
        iniMahasiswa[0] = new Mahasiswa(2102545,"Zahra Fitria", "P", "FPMIPA", "Ilkom");
        iniMahasiswa[1] = new Mahasiswa(2102000,"Lili Rosalini", "P", "FPMIPA", "Ilkom");
        iniMahasiswa[2] = new Mahasiswa(2102650,"Eli Nur Hayat", "P", "FPMIPA", "Kimia");
        iniMahasiswa[3] = new Mahasiswa(2102500,"Rudi Tabuti", "L", "FPMIPA", "Biologi");
        iniMahasiswa[4] = new Mahasiswa(2102550,"Toyyib Hasanuddin", "L", "FPMIPA", "Matematika");

        // keluarkan output
        System.out.println("\n== Data Mahasiswa ==");

        hitung = 1;
        for(int i = 0; i < 5; i++) {
            System.out.println("\n# Data Ke-" + hitung);
            System.out.println("NIM       : " + iniMahasiswa[i].getNim() + "\nNama      : " + iniMahasiswa[i].getNama() + "\nJenis K.  : " + iniMahasiswa[i].getJenkel() + "\nFakultas  : " + iniMahasiswa[i].getFakultas() + "\nProdi     : " + iniMahasiswa[i].getProdi());
            hitung++;
        }
 
    }
}
