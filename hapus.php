<?php

require_once ("core/init.php");

$id = $_GET['id'];

if (hapusData($id)) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        location='dashboard.php';
    </script>";
} else{
    echo  "<script>
        alert('Terjadi Kesalahan');
        location='dashboard.php';
    </script>";
}

?>