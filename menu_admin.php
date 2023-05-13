<?php
    include ('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU ADMIN</title>
</head>
<body>
<table style="width:100%" cellspacing="0" bgcolor=silver>
        <tr>
            <td>
                <center>
                    <a href="<?php echo "menu_admin.php"; ?>">MENU</a>
                </center>
            </td>
            <td>
                <center>
                    <a href="<?php echo "rincian_admin.php"; ?>">RINCIAN PESANAN</a>
                </center>
            </td>
            <td>
                <center>
                    <a href="<?php echo "pembukuan.php"; ?>">LAPORAN PENJUALAN</a>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <a href="<?php echo "addmenu_admin.php"; ?>">ADD MENU</a>
                    <p></p>
                </center>
            </td>
        </tr>
    </table>

    <h2 align = "center">MENU ADMIN</h2>

    <center>
        <a href="<?php echo "addmenu_admin.php"; ?>">ADD MENU</a>
        <p></p>
    </center>

    <div>
        <table border = 1px; align = "center">
            <thead bgcolor = silver>
                <tr>
                    <th>Id Menu</th>
                    <th>Gambar</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM menu";
                    $result = mysqli_query(connection(), $query)
                ?>

                <?php while($data = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td> <?php echo $data['id_menu']; ?></td>
                        <td> <?php echo $data['gambar']; ?></td>
                        <td> <?php echo $data['nama_menu']; ?></td>
                        <td> <?php echo $data['harga']; ?></td>
                        <td>
                            <a href="<?php echo "updatemenu_admin.php?id_menu=".$data['id_menu'] ?>"> Update </a> &nbsp;&nbsp;
                            <a href="<?php echo "deletemenu_admin.php?id_menu=".$data['id_menu'] ?>"> Update </a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>
</html>