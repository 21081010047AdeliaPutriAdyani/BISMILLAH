<?php
    include ('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="pemweb">
        <h3>
            <li class="navi"><a href="<?php echo "addmenu_admin.php"; ?>"> Add Menu</a></li>
            <li class="navi"><a href="<?php echo "rincian_admin.php"; ?>"> Rincian Pemesanan</a></li>
            <li class="navi"><a href="<?php echo "pembukuan.php"; ?>"> Laporan Penjualan</a></li>            
        </h3>
    </ul>
    <h2 align = "center">MENU ADMIN</h2>

    <div>
        <table border = 1px; align = "center"; style="width:100%">
            <thead bgcolor = silver>
                <tr>
                    <th>Id Menu</th>
                    <th>Gambar</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM menu";
                    $result = mysqli_query(connection(), $query)
                ?>

                <?php while($data = mysqli_fetch_array($result)) : ?>
                    <tr align = "center">
                        <td> <?php echo $data['id_menu']; ?></td>
                        <td> <img src="images/<?php echo $data['gambar']; ?>" width="100" height="100"></td> 
                        <td> <?php echo $data['nama_menu']; ?></td>
                        <td> <?php echo $data['harga']; ?></td>
                        <td>
                            <a href="<?php echo "updatemenu_admin.php?id_menu=".$data['id_menu'] ?>"> Update </a> <br>
                            <a href="<?php echo "deletemenu_admin.php?id_menu=".$data['id_menu'] ?>"> Delete </a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>
</html>