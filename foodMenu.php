<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "selforder";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Database tidak terhubung");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/Assistant Cashier and Bookkeeper.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <title>Food Menu - Assier</title>
    <style>
        @media(min-width: 600px) {
            .mx-auto {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <br>
    <div class="mx-auto">
        <div class="row justify-content-center">
            <div class="col-11">
                <h5 class="text-center"></h5>
                <div class="card">
                    <div class="card-header">
                        <h5><strong>Assier</strong></h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> Silahkan pilih menu anda</h5>
                        <form action="" method="post"></form>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Kuantitas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql1 = "select * from menu order by id_menu asc";
                                $q1 = mysqli_query($koneksi, $sql1);
                                while ($r2 = mysqli_fetch_array($q1)) {
                                    $id_menu = $r2['id_menu'];
                                    $gambar = $r2['gambar'];
                                    $nama_menu = $r2['nama_menu'];
                                    $harga = $r2['harga'];
                                    ?>
                                    <tr>
                                        <td scope="row">
                                            <?php echo $gambar ?>
                                        </td>
                                        <td scope="row">
                                            <?php echo $nama_menu ?>
                                        </td>
                                        <td scope="row">
                                            <?php echo $harga ?>
                                        </td>
                                        <td scope="row">

                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="col" align="right">
                            <a href="3" class="btn btn-primary">Lanjutkan Pesanan</a>

                        </div>
                    </div>
                    <div class="card-footer text-body-secondary">
                        <p>Jl.Raya Rungkut Madya, Gunung Anyar, Surabaya</p>
                        <p>&copy; Copyright <strong>Assier</strong>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</body>

</html>