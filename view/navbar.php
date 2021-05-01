<?php
    require_once("core/init.php");
    require_once("view/header.php");
?>

<nav class="navbar">
    <h1 class="nav-head">Toko Elektrik</h1>
    <div class="nav-link">
        <?php if (!isset($_SESSION['user'])) : ?>
        <a href="index.php" class="nav-link">Home</a>
        <a href="register.php" class="nav-link">Register</a>
        <a href="login.php" class="nav-link">Login</a>
        <?php else : ?>
        <?php if (cek_role($_SESSION['user']) == "costumer" ){ ?>
            <a href="detail_transaksi.php" class="nav-link">Detail Transaksi</a>
        <?php } ?>
        <a href="
            <?php
                if (cek_role($_SESSION['user']) == "admin") {
                    echo "dashboard.php";
                } else{
                    echo "index.php";
                }
            ?>" class="nav-link">Halo, <?= $_SESSION['user'] ?></a>
        <a href="logout.php" class="nav-link">Logout</a>
        <?php endif; ?>
    </div>
</nav>

<?php
    require_once("view/footer.php");
?>