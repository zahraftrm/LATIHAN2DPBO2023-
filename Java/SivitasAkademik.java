// membuat kelas mahasiswa
public class SivitasAkademik extends Human {
    // atribut yang diperlukan
    private String asal_universitas;
    private String email_edu;
    
    
    // konstruktor kosong
    SivitasAkademik() {
    }

    // konstruktor dengan parameter
    SivitasAkademik(String asal_universitas, String email_edu) {
        this.asal_universitas = asal_universitas;
        this.email_edu = email_edu;
    }

    // tetapkan asal_universitas
    public void setAsal_Universitas(String asal_universitas) {
        this.asal_universitas = asal_universitas;
    }

    // get asal_universitas
    public String getAsal_Universitas() {
        return this.asal_universitas;
    }
    
    // tetapkan email_edu
    public void setEmail_Edu(String email_edu) {
        this.email_edu = email_edu;
    }

    // get email_edu
    public String getEmail_Edu() {
        return this.email_edu;
    }
}