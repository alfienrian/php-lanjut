<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/proses_pendaftaran.php" method="POST">
        <label for="nim">Nim:</label>
        <input type="text" name="nim" id="nim"> <br>

        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama"> <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email"> <br>

        <label for="tempat">Tempat Tanggal Lahir:</label>
        <input type="text" name="tempat" id="tempat">
        <input type="date" name="ttl" id="ttl"> <br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat"> <br>

        <label>Gender:</label>
        <input type="radio" name="gender" id="laki" value="Laki-laki">
        <label for="laki">Laki-laki</label>
        <input type="radio" name="gender" id="perempuan" value="Perempuan">
        <label for="perempuan">Perempuan</label> <br>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>