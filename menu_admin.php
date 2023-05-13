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
                    <tr>
                        <td> <?php echo $data['id_menu']; ?></td>
                        <td> <?php echo $data['gambar']; ?></td>
                        <td> <?php echo $data['nama_menu']; ?></td>
                        <td> <?php echo $data['harga']; ?></td>
                        <td>
                            <a href="<?php echo "updatemenu_admin.php?id_menu=".$data['id_menu'] ?>"> Update </a> &nbsp;&nbsp;
                            <a href="<?php echo "deletemenu_admin.php?id_menu=".$data['id_menu'] ?>"> Delete </a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>
</html>