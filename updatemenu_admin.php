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

  // Pindahkan file gambar yang diupload ke folder yang ditentukan
  move_uploaded_file($source, $folder . $gambar);
    
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
    <a href="<?php echo "menu_admin.php"; ?>">DATA MENU</a>
    <p></p>
  </center>

  <main role="main">
    <form action="updatemenu_admin.php" method="POST" enctype="multipart/form-data">
      <?php while ($data = mysqli_fetch_array($result)) : ?>

        <div>
          <label>ID MENU</label>
          <input type="text" placeholder="id menu" name="id_menu" value="<?php echo $data['id_menu']; ?>" required="required" readonly>
        </div>
        <div>
          <label>GAMBAR</label>
          <input type="hidden" name="img" value="<?php echo $gambar ?>" >
          <input type="file" name="gambar">
        </div>
        <div>
          <label>NAMA MENU</label>
          <input type="text" placeholder="nama menu" name="nama_menu" value="<?php echo $data['nama_menu']; ?>" required="required">
        </div>
        <div>
          <label>HARGA</label>
          <input type="text" placeholder="harga" name="harga" value="<?php echo $data['harga']; ?>" required="required">
        </div>
      <?php endwhile; ?>
      <button type="submit" name="kirim" value="update">Simpan</button>
    </form>
  </main>
</body>

</html>
