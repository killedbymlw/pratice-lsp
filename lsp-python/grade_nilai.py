nama_siswa = input("Masukan Nama Siswa : ")
nilai_harian = int(input("Masukan Nilai Harian : "))
nilai_uts = int(input("Masukan Nilai UTS : "))
nilai_uas = int(input("Masukan Nilai UAS : "))
nilai_akhir = int(((nilai_harian*40)/100)+((nilai_uts*30)/100)+((nilai_uas*30)/100))

if nilai_akhir >= 85:
    predikat = "AMAT BAIK"
    print("Nama Lengkap Siswa : ", nama_siswa)
    print("Nilai Akhir Siswa : ", nilai_akhir)
    print("Predikat Siswa : ", predikat)

elif nilai_akhir >= 75:
    predikat = "BAIK"
    print("Nama Lengkap Siswa : ", nama_siswa)
    print("Nilai Akhir Siswa : ", nilai_akhir)
    print("Predikat Siswa : ", predikat)

elif nilai_akhir >= 65:
    predikat = "CUKUP"
    print("Nama Lengkap Siswa : ", nama_siswa)
    print("Nilai Akhir Siswa : ", nilai_akhir)
    print("Predikat Siswa : ", predikat)

elif nilai_akhir >= 55:
    predikat = "KURANG"
    print("Nama Lengkap Siswa : ", nama_siswa)
    print("Nilai Akhir Siswa : ", nilai_akhir)
    print("Predikat Siswa : ", predikat)

else:
    predikat = "BURUK"
    print("Nama Lengkap Siswa : ", nama_siswa)
    print("Nilai Akhir Siswa : ", nilai_akhir)
    print("Predikat Siswa : ", predikat)
