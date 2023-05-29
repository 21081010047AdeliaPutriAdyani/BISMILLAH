<?php
include('koneksi.php');

$status = '';

// Melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_order = $_POST['id_order'];
    $nama_pelanggan = $_POST['nama_pelanggan'];

    $query = "INSERT INTO rincian (id_order, nama_pelanggan) 
              VALUES('$id_order', '$nama_pelanggan')"; 

    // Eksekusi query
    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
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
    <title>Home - Assier</title>
    <style>
        @media(min-width: 600px) {
            .mx-auto {
                width: 50%;
                font-family: 'Poppins', sans-serif;
            }
        }
    </style>
</head>

<body>
    <br>
    <div class="mx-auto">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <h4>Assier</h4>
                        </div>
                        <br>
                        <img src="images/Assistant Cashier and Bookkeeper.png" class="card-img mx-auto"
                            alt="Logo assier" style="width: 75%;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Selamat Datang di Assier</h5>
                            <p class="card-text">Nikmati menu kesukaan anda tanpa lama mengantri.</p>
                            <form action="index.php" method="POST">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Nama Pemesan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="nama_pelanggan" name="nama_pelanggan" required="required">
                                    </div>
                                </div>

                                <a href="foodMenu.php" class="btn btn-primary">Mulai Pesanan</a><br>
                            </form>
                        </div>
                        <br>
                        <div class="card-footer text-body-secondary">
                            <p>Jl. Raya Rungkut Madya, Gunung Anyar, Surabaya</p>
                            <p>&copy; Assier. All Rights Reserved</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
