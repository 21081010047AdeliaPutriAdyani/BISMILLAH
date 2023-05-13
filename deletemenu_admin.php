<?php
include ('koneksi.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_menu'])) {

    //mengambil data products yg akan dihapus
    $id_menu = $_GET['id_menu'];

    //query untuk menghapus data
    $query = "DELETE FROM menu WHERE id_menu = '$id_menu'";

    //eksekusi query
    $result = mysqli_query(connection(), $query);

    if($result) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
          //redirect ke halaman lain
          header('Location: menu_admin.php?status='.$status);
      }  
  }
  