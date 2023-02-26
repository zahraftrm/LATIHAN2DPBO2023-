# library
from Human import Human

# membuat kelas sivitas akademik yang merupakan turunan kelas Human
class SivitasAkademik(Human):
    # konstruktor dengan parameter
    def __init__(self, asal_universitas, email_edu):
        #set nilainya
        self.asal_universitas = asal_universitas
        self.email_edu = email_edu
    
    # tetapkan asal_universitas
    def setAsal_universitas(self, asal_universitas):
        self.asal_universitas = asal_universitas
    
    # get asal_universitas
    def getAsal_universitas(self):
        return self.asal_universitas
    
    # tetapkan email_edu
    def setEmail_edu(self, email_edu):
        self.email_edu = email_edu

    # get email_edu
    def getEmail_edu(self):
        return self.email_edu