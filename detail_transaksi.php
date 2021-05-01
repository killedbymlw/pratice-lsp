<?php
    require_once ("core/init.php");

    $nama = $_SESSION['user'];
    $transaksi = tampilkan_transaksi_user($nama);

    require_once ("view/header.php");
    require_once ("view/navbar.php");
?>

<div class="container">
    <h1 class="text-center">Detail Transaksi</h1>

    <div class="product container">
    <?php foreach ($transaksi as $row) : ?>
    <div class="card">
        <h3 class="card-title">Nama User : <?= $row['id_user'] ?></h3>
        <p class="card-text">Nama Barang : <?= $row['id_barang'] ?></p>
        <p class="card-text">Jumlah Barang : <?= $row['jumlah_barang'] ?></p>
        <p class="card-text">Harga Total : <?= number_format($row['total_harga']) ?></p>

        <?php if ($row['status'] == "accept") : ?>
        <p class="btn btn-success" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php elseif ($row['status'] == "reject") : ?>
        <p class="btn btn-danger" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php else: ?>
        <p class="btn btn-warning" style="margin: 2px;"><?= $row['status'] ?></p>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>
</div>

<?php
    require_once ("view/footer.php");
?>