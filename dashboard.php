<?php
    require_once ("core/init.php");

    if (cek_role($_SESSION['user']) == "costumer") {
        header("Location: index.php");
    }

    $products = tampilkan();

    require_once ("view/header.php");
    require_once ("view/navbar.php");
?>

<h1 class="text-center">Dashboard Admin</h1>

<div class="text-center">
    <a href="tambah.php">Tambah Barang</a>
    <a href="history_pembelian.php">History Pembelian</a>
</div>


<div class="product container">

    <?php foreach ($products as $row) : ?>
    <div class="card">
        <h3 class="card-title">Nama Barang : <?= $row['nama_barang'] ?></h3>
        <p class="card-text">Jenis Barang : <?= $row['jenis_barang'] ?></p>
        <p class="card-text">Harga : <?= number_format($row['harga_barang']) ?></p>
        <p class="card-text">Stok : <?= $row['stok_barang'] ?></p>

        <a href="detail.php?id=<?= $row['id_barang'] ?>" class="btn btn-primary" style="margin: 2px;">Detail Barang</a>
    </div>
    <?php endforeach; ?>
</div>


<?php
    require_once ("view/footer.php");
?>