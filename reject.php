<?php 
    require_once ("core/init.php");

    $id = $_GET['id'];

    if (reject($id) > 0) {
        echo "<script>
            alert('Transaksi Ditolak');
            location='history_pembelian.php';
        </script>";
    } else{
        echo "<script>
            alert('Terjadi Kesalahan');
            location='history_pembelian.php';
        </script>";
    }
?>