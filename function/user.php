<?php
    function register_user($nama, $username, $password){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $nama);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password, nama_user) VALUES ('$username', '$password', '$nama')";

        if (mysqli_query($conn, $query)) {
            return true;
        } else{
            return false;
        }
    }

    function cek_register_nama($nama){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $nama);

        $query = "SELECT * FROM users WHERE nama_user='$nama'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 0) {
            return true;
        } else{
            return false;
        }
    }

    function user_login($nama, $password){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $nama);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT password FROM users WHERE nama_user='$nama'";
        $result = mysqli_query($conn, $query);
        $hash = mysqli_fetch_assoc($result)['password'];

        if (password_verify($password, $hash)) {
            return true;
        } else{
            return false;
        }
    }

    function cek_nama($nama){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $nama);

        $query = "SELECT * FROM users WHERE nama_user='$nama'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) != 0 ) {
            return true;
        } else{
            return false;
        }
    }

    function cek_role($nama){
        global $conn;

        $nama = mysqli_real_escape_string($conn, $nama);

        $query = "SELECT role FROM users WHERE nama_user='$nama'";

        $result = mysqli_query($conn, $query);

        $role = mysqli_fetch_assoc($result)['role'];

        return $role;
    }
?>
