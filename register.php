<?php
    require_once ("core/init.php");

    
    require_once ("view/header.php");

    if (isset($_SESSION['user'])) {
        header("Location: index.php");
    }


    $error = "";

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty(trim($nama)) && !empty(trim($username)) && !empty(trim($password))) {
            if (cek_register_nama($nama)) {
                if (register_user($nama, $username, $password)) {
                    header("Location: login.php");
                } else{
                    $error = "Ada masalah saat register";
                }
            } else{
                $error = "Nama sudah terdaftar";
            }
        } else{
            $error = "Data tidak boleh kosong";
        }
    }

    require_once ("view/navbar.php");
?>

<div class="container">
    <h1 class="register-title">Register</h1>

        <form action="" method="post">
            <label for="nama">Nama User</label>
            <input type="text" id="nama" name="nama" class="form-control">
    
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control">
    
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">

            <?php if ($error != '') { ?>
                <div id="error">
                    <?= $error ?>
                </div>
            <?php } ?>
    
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </form>

</div>

<?php
    require_once ("view/footer.php");
?>