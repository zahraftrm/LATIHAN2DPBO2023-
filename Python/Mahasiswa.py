# library
from SivitasAkademik import SivitasAkademik

# membuat kelas mahasiswa yang merupakan turunan kelas SivitasAkademik
class Mahasiswa(SivitasAkademik):
    # konstruktor dengan parameter
    def __init__(self, nim, nama, jenkel, prodi, fakultas):
        #set nilainya
        self.nama = nama
        self.nim = nim
        self.jenkel = jenkel
        self.prodi = prodi
        self.fakultas = fakultas
    
    # tetapkan nim
    def setNim(self, nim):
        self.nim = nim
    
    # get nim
    def getNim(self):
        return self.nim
    
    # tetapkan prodi
    def setProdi(self, prodi):
        self.prodi = prodi

    # get prodi
    def getProdi(self):
        return self.prodi
    
    # tetapkan fakultas
    def setFakultas(self, fakultas):
        self.fakultas = fakultas
    
    # get fakultas
    def getFakultas(self):
        return self.fakultas