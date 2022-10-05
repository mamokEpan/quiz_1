<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Permainan</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <p>&larr; <a href="index.php">Home</a>

                <h4></h4>
                <p>Sudah register? <a href="login.php">Login di sini</a></p>

                <?php
                $namauser = $peranuser = "";
                session_start();
                if (isset($_SESSION['namauser'])) {
                    $namauser = $_SESSION['namauser'];
                }
                if (isset($_SESSION['peranuser'])) {
                    $peranuser = $_SESSION['peranuser'];
                }
                session_unset();
                session_destroy();
                ?>
                <form action="cek.php" method="POST">

                    <div class="form-group">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" />
                            <span style="color : red;"><?= $namauser ?></span>
                        </div>

                        <label for="password">PERAN</label>
                        <select input class="form-control" name="peran" placeholder="peran">
                            <option value="">Pilih Peran</option>
                            <option value="Penyihir">Penyihir</option>
                            <option value="Guard">Guard</option>
                            <option value="Werewolf">Werewolf</option>

                        </select>
                        <span style="color : red;"><?= $peranuser ?></span>
                    </div>
                    <input id="submit" type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

                </form>

            </div>

            <div class="col-md-6">
                <img class="img img-responsive" src="img/images2.png" />
            </div>

        </div>
    </div>

</body>

</html>