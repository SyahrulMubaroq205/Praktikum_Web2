<?php
    //echo "Hello World!";

    //Cara membuat variable
    $nama = "Syahrul Mubaroq";
    $jurusan = "Teknik Informatika";
    $angkatan = 2023;

    //Ouput atau hasil 
    echo "Nama saya adalah : " . $nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>
<body>
    <h2><?php echo "Tahun ajaran : " . $angkatan; ?></h2>
    <p>
        Saya kuliah di jurusan <?= $jurusan; ?>
    </p>
</body>
</html>

