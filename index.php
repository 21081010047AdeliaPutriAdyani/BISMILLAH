<?php
include('koneksi.php');

if (isset($_POST['simpan'])) {
    mysqli_query(connection(), "insert into rincian set nama_pelanggan = '$_POST[nama_pelanggan]'");
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
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="home.css">
    <title>Home - Assier</title>
</head>

<body>
    <br>
    <div class="mx-auto">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    <img src="images/Assistant Cashier and Bookkeeper.png" class="card-img mx-auto"
                                        alt="Logo assier">
                                </div>
                                <div class="col-10">
                                    <h4>ASSIER</h4>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card-body">
                            <div class="pemesan text-center">
                                <h5 class="card-title">Selamat Datang di Restoran Kami </h5>
                                <p class="card-text">Nikmati menu kesukaan anda tanpa lama mengantri.</p>
                                <form action="" method="POST">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label text-start">Nama Pemesan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_pelanggan"
                                                id="nama_pelanggan" required="required">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="pesanan">
                                <p>Silahkan pilih menu anda : </p>
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
                                        $q1 = mysqli_query(connection(), $sql1);
                                        while ($r2 = mysqli_fetch_array($q1)) {
                                            $id_menu = $r2['id_menu'];
                                            $gambar = $r2['gambar'];
                                            $nama_menu = $r2['nama_menu'];
                                            $harga = $r2['harga'];
                                            ?>
                                            <tr>
                                                <td scope="row">
                                                    <img src="images/<?php echo $gambar; ?>" width="80rem" height="80rem">
                                                </td>
                                                <td scope="row">
                                                    <?php echo $nama_menu ?>
                                                </td>
                                                <td scope="row">
                                                    <?php echo $harga ?>
                                                </td>
                                                <td scope="row">
                                                    <button class="btn btn-primary" onclick="increment()">+</button><br><br>
                                                    <input class="form-control form-control-sm" type="number"
                                                        placeholder="0" aria-label=".form-control-sm example" id="myInput"
                                                        value="0"><br>
                                                    <button class="btn btn-danger" onclick="decrement()">-</button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="col" align="right">
                                    <a href="Rincian_pesanan.html" class="btn btn-primary">Lanjutkan Pesanan</a>

                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="card-footer text-body-secondary">
                            <p>Jalan Raya Rungkut Madya, Gunung Anyar, Surabaya</p>
                            <p>&copy; Copyright <strong>Assier</strong>. All Rights Reserved</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>