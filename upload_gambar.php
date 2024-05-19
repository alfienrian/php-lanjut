<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{tulis nim anda disini}">
    <meta name="author" content="{tulis nama anda disini">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload: </label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1">
        </p>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>

</html>

<?php
$target_dir = 'gambar/';
$uploadOk = 1;

// cek apakah ada kiriman data dengan methode post
if (isset($_POST['submit'])) {
    // atur target file dan tempat penyimpanan gambar
    $target_file = $target_dir . basename($_FILES['gambar']['name']);
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // cek apakah file berupa gambar
    $check = getimagesize($_FILES['gambar']['tmp_name']);

    if ($check !== false) {
        echo 'File berupa citra/gambar - ' . $check['mime'] . ".";
        $uploadOk = 1;
        echo "<br>";
    } else {
        echo 'File bukan gambar.';
        $uploadOk = 0;
        die();
    }

    // deteksi apakah ada file dengan nama yang sama
    if (file_exists($target_file)) {
        echo 'Sorry, file already exists.';
        $uploadOk = 0;
    // Check file size
    } elseif ($_FILES['gambar']['size'] > 500000) {
        echo 'Sorry, file anda terlalu besar.';
        $uploadOk = 0;
    // Filter format
    }  elseif ($tipeGambar != 'jpg' && $tipeGambar != 'png' && $tipeGambar != 'jpeg' && $tipeGambar != 'gif') {
        echo 'Sorry, hanya file JPG, JPEG, PNG & GIF .';
        $uploadOk = 0;
    }

    echo "<br";

    // Check if $uploadOk telah sesuai dengan kriteria
    if ($uploadOk == 0) {
        echo 'Sorry, File anda gagal upload.';
    } else {
        // proses upload file
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            echo 'file' . htmlspecialchars(basename($_FILES['gambar']['name'])) . ' berhasil Upload.';
        } else {
            echo 'Sorry, Ada eror saat upload.';
        }
    }
}
