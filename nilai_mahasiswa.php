<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- form -->
<form method="post"> <!-- Tambahkan method="post" di sini -->
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label mt-4 ml-4">NIM</label> 
        <div class="col-4 mt-4">
            <input id="nim" name="nim" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="prodi" class="col-4 col-form-label ml-4">Mata Kuliah</label> <!-- Ubah "matakuliah" menjadi "prodi" -->
        <div class="col-4">
            <select id="matakuliah" name="matakuliah" class="custom-select">
                <option value="pemograman">Pemograman Web 2</option>
                <option value="statistic">Statistic</option>
                <option value="bisnis">Bisnis Digital</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai" class="col-4 col-form-label ml-4">Nilai</label> <!-- Ubah "text" menjadi "nilai" -->
        <div class="col-4">
            <input id="nilai" name="nilai" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-4">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<?php

    if (isset($_POST["submit"])) {
        require_once "class_mhs.php";

        // Set nilai properti pada objek dari nilai yang diisi pada form
        $nim = $_POST["nim"];
        $matakuliah = $_POST["matakuliah"];
        $nilai = $_POST["nilai"]; // Ganti ipk dengan nilai

        // Buat objek baru dari class Mahasiswa
        $mahasiswa1 = new Mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk);
    

  
        echo "<h2>Nilai Mahasiswa</h2>";
        echo "<p>NIM: " . $mahasiswa1->nim . "</p>";
        echo "<p>Nama: " . $mahasiswa1->matakuliah . " </p>";
        echo "<p>Tahun Angkatan: " . $mahasiswa1->thn_angkatan . " </p>";
        echo "<p>Hasil ujian " . $mahasiswa1->hasil($nilai). "</p>";
        echo "<p>Grade ujian: " . $mahasiswa1->grade() . "</p>";
    }
?>
