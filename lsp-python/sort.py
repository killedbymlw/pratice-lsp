def urutasc(mylist):
    mylist = sorted(mylist)
    print(mylist)

def urutdsc(mylist):
    mylist = sorted(mylist, reverse=True)
    print(mylist)

print("======= Metode Sorting Dengan Bubble Sort =======")

angka1 = input("Masukan Angka ke 1 : ")
angka2 = input("Masukan Angka ke 2 : ")
angka3 = input("Masukan Angka ke 3 : ")
angka4 = input("Masukan Angka ke 4 : ")
angka5 = input("Masukan Angka ke 5 : ")
angka6 = input("Masukan Angka ke 6 : ")
angka7 = input("Masukan Angka ke 7 : ")
angka8 = input("Masukan Angka ke 8 : ")
angka9 = input("Masukan Angka ke 9 : ")
angka10 = input("Masukan Angka ke 10 : ")

angka = [angka1, angka2, angka3, angka4, angka5, angka6, angka7, angka8, angka9, angka10]

print("Pilih Metode Pengurutan : ")
print("1. Ascending \n2. Descending")
pilih = input("Pilih Metode Apa : ")

print("Angka Sebelum Diurutkan : ")
print(angka)
print("Angka Setelah Diurutkan : ")

if pilih == ("1"):
    urutasc(angka)
elif pilih == ("2"):
    urutdsc(angka)
else:
    print("Metode Pengurutan Tidak Ditemukan")

menu = input("Kembali kemenu utama? (Y/N) : ")

if menu == ("Y"):
    print("======= Metode Sorting Dengan Bubble Sort =======")

    angka1 = input("Masukan Angka ke 1 : ")
    angka2 = input("Masukan Angka ke 2 : ")
    angka3 = input("Masukan Angka ke 3 : ")
    angka4 = input("Masukan Angka ke 4 : ")
    angka5 = input("Masukan Angka ke 5 : ")
    angka6 = input("Masukan Angka ke 6 : ")
    angka7 = input("Masukan Angka ke 7 : ")
    angka8 = input("Masukan Angka ke 8 : ")
    angka9 = input("Masukan Angka ke 9 : ")
    angka10 = input("Masukan Angka ke 10 : ")

    angka = [angka1, angka2, angka3, angka4, angka5, angka6, angka7, angka8, angka9, angka10]

    print("Pilih Metode Pengurutan : ")
    print("1. Ascending \n2. Descending")
    pilih = input("Pilih Metode Apa : ")

    print("Angka Sebelum Diurutkan : ")
    print(angka)
    print("Angka Setelah Diurutkan : ")

    if pilih == ("1"):
        urutasc(angka)
    elif pilih == ("2"):
        urutdsc(angka)
    else:
        print("Metode Pengurutan Tidak Ditemukan")
    
    menu = input("Kembali kemenu utama? (Y/N) : ")

elif menu == ("N"):
    print("Program Sudah Selesai")