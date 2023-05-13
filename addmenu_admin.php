<?php 
  include ('koneksi.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id_menu = $_POST['id_menu'];
      $gambar = $_POST['gambar'];
      $nama_menu = $_POST['nama_menu'];
      $harga = $_POST['harga'];
      //query SQL
      $query = "INSERT INTO menu (id_menu, gambar, nama_menu, harga) 
      VALUES('$id_menu' , '$gambar' , '$nama_menu' , '$harga')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
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
    <h2 align = "center">FORM TAMBAH DATA MENU</h2>

    <center>
    <a href="<?php echo "menu_admin.php"; ?>">DATA MENU</a>
    <p></p>
    </center>
        
        <main role="main">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Menu berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Menu gagal disimpan</div>';
              }
           ?>

          <form action="addmenu_admin.php" method="POST">
            
            <div>
              <label>ID MENU</label>
              <input type="text" placeholder="id menu" name="id menu" required="required">
            </div>
            <div>
              <label>GAMBAR</label>
              <form method="post" enctype="multipart/form-data" action="prosesupload.php">
                <input type="file" name="gambar">
                <input type="submit" value="Upload">
              </form>
            </div>
            <div>
              <label>NAMA MENU</label>
              <input type="text" placeholder="nama menu" name="nema menu" required="required">
            </div>
            <div>
              <label>HARGA</label>
              <input type="text" placeholder="harga" name="harga" required="required">
            </div>
            
            <button type="submit">Simpan</button>
          </form>
        </main>
  </body>
</html>