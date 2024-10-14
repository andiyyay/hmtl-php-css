<!DOCTYPE html>
<html lang="id">
<head> 
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Toko Kue</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>TOKO KUE</h1></center>

    <form action="proses.php" method="POST">
        <label for="nama">Nama Kue:</label>
        <select name="nama" id="nama">
            <option value="Bolu">Bolu - Rp 20.000</option>
            <option value="Brownies">Brownies - Rp 25.000</option>
            <option value="Donat">Donat - Rp 10.000</option>
        </select>

        <label for="jumlah">Jumlah Beli</label>
        <input type="number" name="jumlah" id="jumlah" required>

        <button type="submit">Hitung Total</button>
    </form>
</body>
</html>