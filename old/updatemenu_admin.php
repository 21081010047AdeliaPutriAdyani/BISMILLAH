<?php
include('koneksi.php');

$status = '';
$result = '';

// Melakukan pengecekan apakah ada variable GET yang dikirim
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id_menu'])) {
    // Query SQL
    $id_menu_upd = $_GET['id_menu'];
    $query = "SELECT * FROM menu WHERE id_menu = '$id_menu_upd'";

    // Eksekusi query
    $result = mysqli_query(connection(), $query);
  }
}

// Melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_menu = $_POST['id_menu'];
  $gambar = $_FILES['gambar']['name'];
  $source = $_FILES['gambar']['tmp_name'];
  $nama_menu = $_POST['nama_menu'];
  $harga = $_POST['harga'];
  $folder = './images/';

  if ($gambar != '') {
    move_uploaded_file($source, $folder . $gambar);
    $update = mysqli_query(connection(), "UPDATE menu SET 
      gambar = '$gambar',
      nama_menu = '$nama_menu',
      harga = '$harga'
      WHERE id_menu = '$id_menu'
    ");
    if ($update) {
      echo 'berhasil';
    } else {
      echo 'gagal';
    }
  } else {
    $update = mysqli_query(connection(), "UPDATE menu SET 
    gambar = '$gambar'
    WHERE id_menu = '$id_menu'
    ");
    if ($update) {
      echo 'berhasil';
    } else {
      echo 'gagal';
    }
  }


  // Query SQL
  $sql = "UPDATE menu SET gambar='$gambar', nama_menu='$nama_menu', harga='$harga' WHERE id_menu='$id_menu'";

  // Eksekusi query
  $result = mysqli_query(connection(), $sql);
  if ($result) {
    $status = 'ok';
  } else {
    $status = 'err';
  }

  // Redirect ke halaman lain
  header('Location: menu_admin.php?status=' . $status);
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>UPDATE</title>
</head>

<body>
  <h2 align="center">FORM UPDATE DATA MENU</h2>

  <center>
    <a href="menu_admin.php">DATA MENU</a>
    <p></p>
  </center>

  <main role="main">
    <form action="updatemenu_admin.php" method="POST" enctype="multipart/form-data">
      <?php while ($data = mysqli_fetch_array($result)): ?>

        <table align="center">
        <tr>
          <td>Id Menu</td>
          <td><input type="text" name="id_menu" value="<?php echo $data['id_menu']; ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td><input type="file" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
          
        </tr>
        <tr>
          <td>Nama Menu</td>
          <td><input type="text" name="nama_menu" value="<?php echo $data['nama_menu']; ?>"></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td> <button type="submit" name="kirim" value="update">Simpan</button> </td>
        </tr>
      </table>

      <?php endwhile; ?>
    </form>
  </main>
</body>

</html>