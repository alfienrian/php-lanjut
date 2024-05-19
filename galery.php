<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjut - Galeri</title>
</head>

<body>
    <style>
        .gallery {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: stretch;
            justify-content: center;
            padding: 0;
            gap: 1.2rem;
        }

        .gallery img {
            width: 20%;
            height: auto;
            object-fit: contain;
        }
    </style>

    <div class="gallery">
        <?php
        $fileList = glob('gambar/*');
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo '<img src="' . $filename . '" alt="gambar"><br>';
            }
        }
        ?>
    </div>

</body>

</html>