<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form method="post" action="">
  <div class="form-group row">
    <label for="nim" class="col-4 ml-4 mt-4 col-form-label">NIM</label> 
    <div class="col-4 mt-4">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mk" class="col-4 ml-4 col-form-label">Pilih MK</label> 
    <div class="col-4">
      <select id="mk" name="mk" class="custom-select">
        <option value="Pemograman Web2">Pemrograman Web2</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Statistika & Probilitas">Statistika & Probilitas</option>
        <option value="Komuikasi Efektif">komunikasi Efektif</option>
        <option value="Ui Ux">Ui Ux</option>
        <option value="Basis Data">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 ml-4 col-form-label">Nilai</label> 
    <div class="col-4">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-4 ">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

<?php
// Menggunakan isset() untuk memastikan bahwa form telah disubmit sebelum mencoba mengakses nilai yang dikirimkan
if (isset($_POST["submit"])) {
    require_once "class_mhs.php";

    // Set nilai properti pada objek dari nilai yang diisi pada form
    $nim = $_POST["nim"];
    $mk = $_POST["mk"];
    $nilai = $_POST["nilai"];

    // Buat objek baru dari class NilaiMahasiswa
    $nilaiMahasiswa1 = new NilaiMahasiswa($nim, $mk, $nilai);

    // Menampilkan informasi nilai mata kuliah
    echo "<p>NIM: " . $nilaiMahasiswa1->nim . "</p>";
    echo "<p>Nama Mata Kuliah: " . $nilaiMahasiswa1->mk . "</p>";
    echo "<p>Nilai: " . $nilaiMahasiswa1->nilai . "</p>";
    echo "<p>Hasil Ujian: " . $nilaiMahasiswa1->grade() . "</p>";
    echo "<p>Grade: " . $nilaiMahasiswa1->hasil() . "</p>";
}
?>
</body>
</html>

