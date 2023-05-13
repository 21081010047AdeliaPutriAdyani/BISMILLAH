<?php
    include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rincian Pesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="pemweb">
        <h3>
            <li class="navi"><a href="<?php echo "menu_admin.php"; ?>"> Menu</a></li>
            <li class="navi"><a href="<?php echo "rincian_admin.php"; ?>">Rincian Pesanan</a></li>
            <li class="navi"><a href="<?php echo "pembukuan.php"; ?>">Laporan Penjualan</a></li>
        </h3>
    </ul>
    <h2 align = "center">RINCIAN PESANAN</h2>

    <div>
        <table border = 1px; align = "center">
            <thead bgcolor = silver>
        <table>
            <thead>
                <tr>
                    <th>id_order</th>
                    <th>tgl/jam</th>
                    <th>nama_pelanggan</th>
                    <th>jumlah</th>
                    <th>nama_menu</th>
                    <th>harga</th>
                    <th>total_harga</th>
                    <th>total_order</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM order";
                    $result = mysqli_query(connection(),$query);
                ?>

                <?php 
                    while($data = mysqli_fetch_array($result)): 
                ?>

                <tr>
                    <td><?php echo $data['id_order']?></td>
                    <td><?php echo $data['tgl/jam']?></td>
                    <td><?php echo $data['nama_pelanggan']?></td>
                    <td><?php echo $data['jumlah']?></td>
                    <td><?php echo $data['nama_menu']?></td>
                    <td><?php echo $data['harga']?></td>
                    <td><?php echo $data['total_harga']?></td>
                    <td><?php echo $data['total_order']?></td>
                </tr>
                <?php endwhile ?>
            </tbody>
    </table>
    
</body>
</html>