<?php
    include ('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penjualan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul class="pemweb">
        <h3>
            <li class="navi"><a href="<?php echo "menu_admin.php"; ?>"> Menu</a></li>
            <li class="navi"><a href="<?php echo "rincian_admin.php"; ?>"> Rincian Pemesanan</a></li>
            <li class="navi"><a href="<?php echo "pembukuan.php"; ?>"> Laporan Penjualan</a></li>            
        </h3>
    </ul>
    <h2 align = "center">LAPORAN PENJUALAN</h2>
    <div>
        <table border = 1px; align = "center"; style="width:100%">
            <thead bgcolor = silver>
                <tr>
							<th>Tanggal/Jam</th>
							<th>Total Harga</th>
                            <th>Total Perbulan</th>
						</tr>
                    </thead> 
                    </tbody>
                </table>
                <div class="row">
					<div class="col-md-7 text-right">
                    </div>
                <tbody>               
                <?php 
                
                  $query = "SELECT * FROM pembukuan";
                  $result = mysqli_query(connection(), $query)
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['Tanggal/Jam'];  ?></td>
                    <td><?php echo $data['Total Harga'];  ?></td>
                    <td><?php echo $data['Total Perbulan'];  ?></td>
                  </tr>
                <?php endwhile ?>
                <tbody>
			    </table>
</body>
</html>
