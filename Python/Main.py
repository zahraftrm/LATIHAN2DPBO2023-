# library
from Human import Human
from SivitasAkademik import SivitasAkademik
from Mahasiswa import Mahasiswa

# welcome!
print ("\n===== Selamat Datang di Database Mahasiswa UPI =====\n")

# banyaknya data yang diinginkan
m = int(input("Masukkan banyak data yang diinginkan : "))

# membuat array of objects untuk kelas Human
arrHuman = []

# isi data untuk kelas Human
print ("\nIsi Data Manusia!\n")
for i in range(m):
    # input data
    nik = str(input("Nik         : "))
    nama = str(input("Nama        : "))
    jenkel = str(input("Jenis Kel.  : "))
    print ("\n")
    
    # masukkan nilai atribut
    arrHuman.append(Human(nik, nama, jenkel))

# menampilkan data kelas Human
print("== Data Manusia ==\n")

# tampilkan data. int hitung untuk menunjukkan urutan data
hitung = 1
for Human in arrHuman:
    print("# Data ke -",hitung)
    print("Nik         : ",Human.getNik(), "\nNama        : ",Human.getNama())
    print("Jenis Kel.  : ",Human.getJenkel(),"\n") 
    
    # increment
    hitung = hitung+1

# membuat array of objects untuk kelas SivitasAkademik
arrSivitas = []

# isi data untuk kelas SivitasAkademik
print ("\nIsi Data Sivitas Akademik!\n")
for i in range(m):
    # input data
    asal = str(input("Univ. Asal    : "))
    email = str(input("Email Edu     : "))
    print ("\n")
    
    # masukkan nilai atribut
    arrSivitas.append(SivitasAkademik(asal, email))

# menampilkan data kelas SivitasAkademik
print("== Data Sivitas Akademik ==\n")

# tampilkan data. int hitung untuk menunjukkan urutan data
hitung = 1
for SivitasAkademik in arrSivitas:
    print("# Data ke -",hitung)
    print("Univ. Asal       : ",SivitasAkademik.getAsal_universitas())
    print("Email Edu        : ",SivitasAkademik.getEmail_edu(),"\n") 
    
    # increment
    hitung = hitung+1

# membuat array of objects untuk kelas Mahasiswa
arrMhs = []

# isi data untuk kelas Mahasiswa
print ("\nIsi Data Mahasiswa!\n")
for i in range(m):
    # input data
    nim = int(input("Nim         : "))
    nama = str(input("Nama        : "))
    jenkel = str(input("Jenis Kel.  : "))
    prodi = str(input("Prodi       : "))
    fakultas = str(input("Fakultas    : "))
    print ("\n")
    
    # masukkan nilai atribut
    arrMhs.append(Mahasiswa(nim, nama, jenkel, prodi, fakultas))

# menampilkan data kelas Mahasiswa
print("== Data Mahasiswa ==\n")

# tampilkan data. int hitung untuk menunjukkan urutan data
hitung = 1
for Mahasiswa in arrMhs:
    print("# Data ke -",hitung)
    print("Nim         : ",Mahasiswa.getNim(), "\nNama        : ",Mahasiswa.getNama())
    print("Jenis Kel.  : ",Mahasiswa.getJenkel(), "\nProdi       : ",Mahasiswa.getProdi())
    print("Fakultas    : ",Mahasiswa.getFakultas(),"\n") 
    
    # increment
    hitung = hitung+1