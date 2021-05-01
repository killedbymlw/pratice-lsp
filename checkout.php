<?php

    require_once ("core/init.php");

    $error = "";

    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        // membuat variable untuk menampilkan per id
        $product = tampilkan_per_id($id);
        while ($row = mysqli_fetch_assoc($product)) {
            $id_barang = $row['id_barang'];
            $nama_barang = $row['nama_barang'];
            $jenis_barang = $row['jenis_barang'];
            $harga_barang = $row['harga_barang'];
            $stok_barang = $row['stok_barang'];
        }
    }

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nama_barang = $_POST['nama_barang'];
        $tanggal_transaksi = $_POST['tanggal'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $harga_barang = $_POST['harga_barang'];
        $harga_total = $harga_barang*$jumlah_barang;

        if (!empty($tanggal_transaksi) && !empty($jumlah_barang)) {
            if (checkout($nama, $nama_barang, $tanggal_transaksi, $jumlah_barang, $harga_total)) {
                echo "<script>
                    alert('Pembelian Berhasil');
                    location='detail_transaksi.php';
                </script>";
            } else{
                $error = "terjadi kesalahan";
            }
        } else{
            $error = "data harus diisi";
        }
    }

    require_once ("view/header.php");
    require_once ("view/navbar.php");

?>

<div class="container checkout">

    
    <div class="card">
        <h3 class="card-title">Nama Barang : <?= $nama_barang ?></h3>
        <p class="card-text">Jenis Barang : <?= $jenis_barang ?></p>
        <p class="card-text">Harga : <?= number_format($harga_barang) ?></p>
        <p class="card-text">Stok : <?= $stok_barang ?></p>
    </div>

    <div class="form-action">
    <form action="" method="post">
            <label for="nama">Nama User</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?= $_SESSION['user'] ?>" readonly>
    
            <label for="nama_barang">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" class="form-control" value="<?= $nama_barang?>" readonly>

            <label for="tanggal">Tanggal Transaksi</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control">

            <label for="jumlah_barang">Jumlah Barang</label>
            <input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control">

            <label for="harga_barang">Harga Barang</label>
            <input type="text" id="harga_barang" name="harga_barang" class="form-control" value="<?= $harga_barang ?>" readonly>

            <?php if ($error != '') { ?>
                <div id="error">
                    <?= $error ?>
                </div>
            <?php } ?>
    
            <button type="submit" name="submit" class="btn btn-primary">Checkout</button>
        </form>
    </div>
</div>

<?php
    require_once ("view/footer.php");
?>