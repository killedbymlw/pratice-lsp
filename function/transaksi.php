<?php

    function checkout($nama, $nama_barang, $tanggal_transaksi, $jumlah_barang, $harga_total){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $nama);
        $nama_barang = mysqli_real_escape_string($conn, $nama_barang);
        $tanggal_transaksi = mysqli_real_escape_string($conn, $tanggal_transaksi);
        $jumlah_barang = mysqli_real_escape_string($conn, $jumlah_barang);
        $harga_total = mysqli_real_escape_string($conn, $harga_total);

        $query = "INSERT INTO transaksi (id_barang, id_user, tgl_transaksi, total_harga, jumlah_barang) VALUES ('$nama_barang', '$nama', '$tanggal_transaksi', '$harga_total', '$jumlah_barang')";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }


    function tampilkan_transaksi_user($nama){
        global $conn;

        $query = "SELECT * FROM transaksi WHERE id_user='$nama'";

        $result = mysqli_query($conn, $query);

        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tampilkan_transaksi(){
        global $conn;

        $query = "SELECT * FROM transaksi";

        $result = mysqli_query($conn, $query);

        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function accept($id){
        global $conn;

        $query = "UPDATE transaksi SET status = 'accept' WHERE id_transaksi='$id'";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }

    function reject($id){
        global $conn;

        $query = "UPDATE transaksi SET status = 'reject' WHERE id_transaksi='$id'";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }
?>