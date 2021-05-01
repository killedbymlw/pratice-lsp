<?php

    function tampilkan(){
        global $conn;

        $query = "SELECT * FROM barang";

        $result = mysqli_query($conn, $query);

        $rows = [];
        
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }


    function tampilkan_per_id($id){
        global $conn;

        $query = "SELECT * FROM barang WHERE id_barang='$id'";

        $result = mysqli_query($conn, $query);

        return $result;
    }

    function tambahData($nama_barang, $jenis_barang, $harga_barang, $stok_barang){
        global $conn;

        $nama_barang = mysqli_real_escape_string($conn, $nama_barang);
        $jenis_barang = mysqli_real_escape_string($conn, $jenis_barang);
        $harga_barang = mysqli_real_escape_string($conn, $harga_barang);
        $stok_barang = mysqli_real_escape_string($conn, $stok_barang);

        $query = "INSERT INTO barang (nama_barang, jenis_barang, harga_barang, stok_barang) VALUES ('$nama_barang', '$jenis_barang', '$harga_barang', '$stok_barang')";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }

    function hapusData($id){
        global $conn;

        $query = "DELETE FROM barang WHERE id_barang='$id'";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }

    function editData($nama_barang, $jenis_barang, $harga_barang, $stok_barang, $id_barang){
        global $conn;

        $query = "UPDATE barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', harga_barang='$harga_barang', stok_barang='$stok_barang' WHERE id_barang='$id_barang'";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }
?>