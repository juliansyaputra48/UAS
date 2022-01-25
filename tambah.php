<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
}

?>
<!doctype html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
     <h2 class="alert alert-success" class="logo">
            <img src="foto/smp.jpg" style="width:  5rem;">
            SMPN 1 TARANO    
        </h2>

    <?php
    require 'setting.php';

    if (isset($_POST['simpan'])) {
        $tnim = $_POST['tnim'];
        $tnama = $_POST['tnama'];
        $talamat = $_POST['talamat'];
        $tprogram = $_POST['tprogram'];

        $sql = "INSERT INTO mahasiswa VALUES (NULL, '$tnim', '$tnama', '$talamat', '$tprogram')";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: index.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }
    ?>
    <div class="card mt-4">
        <form action="" method="post">

            <div class="mb-2">
                <label>Nis</label>
                <input required type="text" name="tnim" class="form-control">
            </div>

            <div class="mb-2">
                <label>Nama</label>
                <input type="text" name="tnama" class="form-control">
            </div>

            <div class="mb-2">
                <label>Alamat</label>
                <textarea name="talamat" class="form-control" cols="30" rows="5"></textarea>
            </div>

            <div class="mb-4">
                <label>Angkatan</label>
                <input type="text" name="tprogram" class="form-control">
            </div>

            
        </div>
        
            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            <a href="index.php" class="btn btn-secondary float-end">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>