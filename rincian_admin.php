<?php
    include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rincian Pesanan</title>
</head>
<body>
    <h2 align = "center">RINCIAN PESANAN</h2>

    <center>
        <a href="<?php echo "menu_admin.php"; ?>">MENU</a>
        <a href="<?php echo "rincian_admin.php"; ?>">RINCIAN PESANAN</a>
        <a href="<?php echo "pembukuan.php"; ?>">LAPORAN PENJUALAN</a>
    </center>

    <table>
        <tr>
            <td colspan="1">

            </td>
            <td>
                <center>
                    <a href="<?php echo "addmenu_admin.php"; ?>">ADD MENU</a>
                    <p></p>
                </center>
            </td>
        </tr>
    </table>

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