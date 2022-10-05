<?php
if (isset($_POST['submit2'])) {
    session_start();

    $namauserreg = $_POST['usernamereg'];
    $peranuserreg = $_POST['peranreg'];
    $eror = false;
    if ($namauserreg == "") {
        $_SESSION['namauserreg'] = "nama harus diisi!";
        $eror = true;
    }
    if ($peranuserreg == "") {
        $_SESSION['peranuserreg'] = "pilih peranmu untuk memulai game";
        $eror = true;
    }
    if ($eror == true) {
        header('location:login.php');
    } else {
        echo "berhasil";
    }
}
