<?php
    require_once ("core/init.php");

    $id = $_GET['id'];

    if (accept($id) > 0) {
        echo "<script>
            alert('Transaksi Diterima');
            location='history_pembelian.php';
        </script>";
    } else{
        echo "<script>
            alert('Terjadi Kesalahan');
            location='history_pembelian.php';
        </script>";
    }
?>