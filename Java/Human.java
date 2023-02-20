// membuat kelas Human
public class Human {
    // atribut yang diperlukan
    private String nik;
    public String nama;
    public String jenkel;
        
    // konstruktor kosong
    Human() {
    }

    // konstruktor dengan parameter
    Human(String nik, String nama, String jenkel) {
        this.nik = nik;
        this.nama = nama;
        this.jenkel = jenkel;
    }

    // tetapkan nama
    public void setNama(String nama) {
        this.nama = nama;
    }

    // get nama
    public String getNama() {
        return this.nama;
    }
    
    // tetapkan nik
    public void setNik(String nik) {
        this.nik = nik;
    }

    // get nik
    public String getNik() {
        return this.nik;
    }

    // tetapkan jenkel
    public void setJenkel(String jenkel) {
        this.jenkel = jenkel;
    }

    // get jenkel
    public String getJenkel() {
        return this.jenkel;
    }
}