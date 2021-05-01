<?php
    require_once ("core/init.php");

    $transaksi = tampilkan_transaksi();

    require_once ("view/header.php");
    require_once ("view/navbar.php");
?>

<div class="container">
    <h1 class="text-center">History Pembelian</h1>

    <table>
        <tr>     
            <th>No</th>
            <th>Nama User</th>
            <th>Nama Barang</th>
            <th>Tanggal Transaksi</th>
            <th>Jumlah Barang</th>
            <th>Harga Total</th>
            <th>Status Pembayaran</th>
        </tr>
        
        <?php 
            $nomor = 1;
            foreach ($transaksi as $data) : ?>
        <tr>

            <td><?= $nomor++ ?></td>
            <td><?= $data['id_user'] ?></td>
            <td><?= $data['id_barang'] ?></td>
            <td><?= $data['tgl_transaksi'] ?></td>
            <td><?= $data['jumlah_barang']?></td>
            <td><?= number_format($data['total_harga']) ?></td>
            <td>
                <?php if ($data['status'] == "accept") : ?>
                <p style="color: green; font-weight: bold"><?= $data['status'] ?></p>
                <?php elseif ($data['status'] == "reject") : ?>
                <p style="color: red; font-weight: bold;"><?= $data['status'] ?></p>
                <?php else: ?>
                <p><?= $data['status'] ?></p>
                <a href="accept.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-success">Accept</a>
                <a href="reject.php?id=<?= $data['id_transaksi'] ?>" class="btn btn-danger">Reject</a>
                <?php endif;?>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
    require_once ("view/footer.php");
?>