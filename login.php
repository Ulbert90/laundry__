<?php
session_start();
include_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
    }

    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $_SESSION["username"] = $username;
        $_SESSION["status"] = "login";
        header("location: admin/index.php");
        exit();
    } else {
        header("location: index.php?pesan=gagal");
        exit();
    }
} else {
    header("location: index.php");
    exit();
}
