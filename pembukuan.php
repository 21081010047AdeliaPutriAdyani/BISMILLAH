<!DOCTYPE html>
<html>
<head>
	<title>Laporan Keuangan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Tautkan file CSS Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-5">Laporan Penjualan</h2>
				<table class="table table-bordered">
					<thead>
						<tr bgcolor="silver">
							<th>Tanggal/Jam</th>
							<th>Total Harga</th>
						</tr>
                    </thead> 
                    </tbody>
                </table>
                <div class="row">
					<div class="col-md-7 text-right">
						<p>Total Perbulan : </p>
                    </div>
                    <!-- Tautkan file JavaScript Bootstrap -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    
                <tbody>               
                <?php 
                include "koneksi.php";
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
