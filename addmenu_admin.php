<?php
include('koneksi.php');

$status = '';

// Melakukan pengecekan apakah ada form yang dipost
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_menu = $_POST['id_menu'];
  $gambar = $_FILES['gambar']['name'];
  $nama_menu = $_POST['nama_menu'];
  $harga = $_POST['harga'];

  // Set path folder tempat menyimpan gambarnya
  $path = "images/" . $gambar;

  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") { // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if ($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if (move_uploaded_file($tmp_file, $path)) { // Cek apakah gambar berhasil diupload atau tidak
        // Jika gambar berhasil diupload, lakukan :	
        // Proses simpan ke Database
        $query = "INSERT INTO menu (id_menu, gambar, nama_menu, harga) 
                  VALUES('$id_menu', '$gambar', '$nama_menu', '$harga')";
        $result = mysqli_query(connection(), $query); // Eksekusi/ Jalankan query dari variabel $query

        if ($result) { // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          $status = 'ok';
        } else {
          // Jika Gagal, Lakukan :
          $status = 'err';
        }
      } else {
        // Jika gambar gagal diupload, Lakukan :
        $status = 'err';
      }
    } else {
      // Jika ukuran file lebih dari 1MB, lakukan :
      $status = 'err';
    }
  } else {
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    $status = 'err';
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>ADD</title>
</head>

<body>
  <h2 align="center">FORM TAMBAH DATA MENU</h2>

  <center>
    <a href="menu_admin.php">DATA MENU</a>
    <p></p>
  </center>

  <main role="main">
    <?php
    if ($status == 'ok') {
      echo '<br><br><div class="alert alert-success" role="alert">Data Menu berhasil disimpan</div>';
    } elseif ($status == 'err') {
      echo '<br><br><div class="alert alert-danger" role="alert">Data Menu gagal disimpan</div>';
    }
    ?>

      <form action="addmenu_admin.php" method="POST" enctype="multipart/form-data">
        <div>
          <label>ID MENU</label>
          <input type="text" placeholder="id menu" name="id_menu" required="required">
        </div>
        <div>
            <label>GAMBAR</label>
            <input type="file" name="gambar">
            </div>
            <div>
            <label></label>
            <input type="file" name="gambar">
            </div>
            <div>
            <label>NAMA MENU</label>
            <input type="text" placeholder="nama menu" name="nama_menu" required="required">
            </div>
            <div>
            <label>HARGA</label>
            <input type="text" placeholder="harga" name="harga" required="required">
            </div>

      <button type="submit" value="upload">Simpan</button>
    </form>
  </main>
</body>

</html>