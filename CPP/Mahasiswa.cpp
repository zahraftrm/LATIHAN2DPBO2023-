// library
#include "SivitasAkademik.cpp"

// membuat kelas mahasiswa yang merupakan turunan dari kelas SivitasAkademik
class Mahasiswa: public SivitasAkademik {
    // atribut yang diperlukan
    private:
        int nim;
        string prodi;
        string fakultas;
    
    public:
        // konstruktor kosong
        Mahasiswa() {
        }

        // konstruktor dengan parameter
        Mahasiswa(int nim, string nama, string jenkel, string fakultas, string prodi) {
            // set nilainya
            this->nim = nim; 
            this->nama = nama;
            this->jenkel = jenkel;
            this->fakultas = fakultas;
            this->prodi = prodi;
        }

         // tetapkan nim
        void setNim(int nim) {
            this->nim = nim;
        }

        // get nim
        int getNim() {
            return this->nim;
        }

         // tetapkan prodi
        void setProdi(string prodi) {
            this->prodi = prodi;
        }

        // get prodi
        string getProdi() {
            return this->prodi;
        }

         // tetapkan fakultas
        void setFakultas(string fakultas) {
            this->fakultas = fakultas;
        }
        
        // get fakultas
        string getFakultas() {
            return this->fakultas;
        }
        
        // deconstruct
        ~Mahasiswa() {
        }
};