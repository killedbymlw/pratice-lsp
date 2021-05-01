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
        $nama_barang = $_POST['nama_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $harga_barang = $_POST['harga_barang'];
        $stok_barang = $_POST['stok_barang'];

        if (!empty(trim($nama_barang)) && !empty(trim($harga_barang))) {
            if (editData($nama_barang, $jenis_barang, $harga_barang, $stok_barang, $id_barang)) {
                echo "<script>
                    alert('Berhasil Mengedit Data Barang');
                    location='dashboard.php';
                </script>";
            } else{
                $error = "terjadi kesalahan saat mengedit barang";
            }
        } else{
            $error = "Data Barang Wajib diisi";
        }
    }

    require_once ("view/header.php");
    require_once ("view/navbar.php");
?>

<div class="container">
    <h1 class="register-title">Edit Data Barang</h1>

        <form action="" method="post">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" class="form-control" value="<?= $nama_barang?>">
    
            <label for="jenis_barang">Jenis Barang</label>
            <input type="text" id="jenis_barang" name="jenis_barang" class="form-control" value="<?= $jenis_barang ?>">

            <label for="harga_barang">Harga Barang</label>
            <input type="text" id="harga_barang" name="harga_barang" class="form-control" value="<?= $harga_barang ?>">

            <label for="stok_barang">Stok Barang</label>
            <input type="text" id="stok_barang" name="stok_barang" class="form-control" value="<?= $stok_barang ?>"> 

            <?php if ($error != '') { ?>
                <div id="error">
                    <?= $error ?>
                </div>
            <?php } ?>
    
            <button type="submit" name="submit" class="btn btn-primary">Edit Barang</button>
        </form>

</div>

<?php
    require_once ("view/footer.php");
?>