// membuat kelas mahasiswa
public class Mahasiswa extends SivitasAkademik {
    // atribut yang diperlukan
    private int nim;
    private String fakultas;
    private String prodi;
    
    
    // konstruktor kosong
    Mahasiswa() {
    }

    // konstruktor dengan parameter
    Mahasiswa(int nim, String nama, String jenkel, String fakultas, String prodi) {
        this.nim = nim; 
        this.nama = nama;
        this.jenkel = jenkel;
        this.fakultas = fakultas;
        this.prodi = prodi;
    }
    
    // tetapkan nim
    public void setNim(int nim) {
        this.nim = nim;
    }

    // get nim
    public int getNim() {
        return this.nim;
    }
    
    // tetapkan prodi
    public void setProdi(String prodi) {
        this.prodi = prodi;
    }

    // get prodi
    public String getProdi() {
        return this.prodi;
    }

    // tetapkan fakultas
    public void setFakultas(String fakultas) {
        this.fakultas = fakultas;
    }
    
    // get fakultas
    public String getFakultas() {
        return this.fakultas;
    }
}