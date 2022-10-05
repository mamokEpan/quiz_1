<?php
if (isset($_POST['submit'])) {
    session_start();

    $namauser = $_POST['username'];
    $peranuser = $_POST['peran'];
    $eror = false;
    if ($namauser == "") {
        $_SESSION['namauser'] = "nama harus diisi!";
        $eror = true;
    }
    if ($peranuser == "") {
        $_SESSION['peranuser'] = "pilih peranmu untuk memulai game";
        $eror = true;
    }
    if ($eror == true) {
        header('location:login.php');
    } else {
        echo "berhasil";
    }
}
