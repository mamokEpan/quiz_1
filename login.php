<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login WEREWOLF</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>

                <h4>Masuk ke GAME</h4>
                <p>Belum DAFTAR? <a href="register.php">Daftar di sini</a></p>


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
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" />
                        <span style="color : red;"><?= $namauser ?></span>
                    </div>



                    <div class="form-group">
                        <label for="password">PERAN</label>
                        <select input class="form-control" name="peran" placeholder="peran">
                            <option value="">Pilih Peran</option>
                            <option value="Penyihir">Penyihir</option>
                            <option value="Guard">Guard</option>
                            <option value="Werewolf">Werewolf</option>

                        </select>
                        <span style="color : red;"><?= $peranuser ?></span>
                    </div>

                    <input id="submit" name="submit" type="submit" class="btn btn-success btn-block" value="Masuk" />

                </form>

            </div>

            <div class="col-md-6">

            </div>

        </div>
    </div>

</body>

</html>