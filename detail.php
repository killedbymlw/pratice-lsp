<?php
    require_once ("core/init.php");

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }

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

    require_once ("view/header.php");
    require_once ("view/navbar.php");
?>

<div class="container">
    <div class="card">
        <h3 class="card-title">Nama Barang : <?= $nama_barang ?></h3>
        <p class="card-text">Jenis Barang : <?= $jenis_barang ?></p>
        <p class="card-text">Harga : <?= number_format($harga_barang) ?></p>
        <p class="card-text">Stok : <?= $stok_barang ?></p>

        <?php if (cek_role($_SESSION['user']) == "admin") : ?>
        <a href="edit.php?id=<?= $id_barang ?>" class="btn btn-warning" style="margin: 2px;">Edit Barang</a>
        <a href="hapus.php?id=<?= $id_barang ?>" class="btn btn-danger" style="margin: 2px;">Hapus Barang</a>
        <?php else: ?>
        <a href="checkout.php?id=<?= $id_barang ?>" class="btn btn-primary" style="margin: 2px;">Beli Barang</a>
        <?php endif; ?>
    </div>
</div>

<?php
    require_once ("view/footer.php");
?>