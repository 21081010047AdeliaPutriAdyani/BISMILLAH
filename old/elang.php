<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Rincian Pesanan</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Rincian Pesanan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Jumlah</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?></th>
                    <td>Ayam Goreng</td>
                    <td>12000</td>
                    <td><?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] * 12000 : ''; ?></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <form method="POST">
                            <input type="number" name="jumlah" placeholder="Jumlah">
                            <button type="submit">bayar</button>
                        </form>
                    </td>
                    <td>Total</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
