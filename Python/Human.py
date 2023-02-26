# membuat kelas human
class Human:
    # konstruktor dengan parameter
    def __init__(self, nik, nama, jenkel):
        #set nilainya
        self.nik = nik
        self.nama = nama
        self.jenkel = jenkel
    
    # tetapkan nik
    def setNik(self, nik):
        self.nik = nik
    
    # get nik
    def getNik(self):
        return self.nik
    
    # tetapkan nama
    def setNama(self, nama):
        self.nama = nama

    # get nama
    def getNama(self):
        return self.nama
    
    # tetapkan jenkel
    def setJenkel(self, jenkel):
        self.jenkel = jenkel
    
    # get jenkel
    def getJenkel(self):
        return self.jenkel