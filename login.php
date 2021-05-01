<?php
    require_once ("core/init.php");

    if (isset($_SESSION['user'])) {
        header("Location: index.php");
    }

    $error = "";

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $password = $_POST['password'];

        if (!empty(trim($nama)) && !empty(trim($password))) {
            if (cek_nama($nama)) {
                if (user_login($nama, $password)) {
                    $_SESSION['user'] = $nama;
                    header("Location: index.php");
                } else{
                    $error = "ada kesalahan saat login";
                }
            } else{
                $error = "Nama blom tersedia";
            }
        } else{
            $error = "data tidak boleh kosong";
        }
    }

    require_once ("view/header.php");
    require_once ("view/navbar.php");
?>

<div class="container">
    <h1 class="register-title">Login</h1>

        <form action="" method="post">
            <label for="nama">Nama User</label>
            <input type="text" id="nama" name="nama" class="form-control">
    
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">

            <?php if ($error != '') { ?>
                <div id="error">
                    <?= $error ?>
                </div>
            <?php } ?>
    
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>

</div>

<?php
    require_once ("view/footer.php");
?>