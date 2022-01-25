<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
}

?>
<!doctype html>
<html>
<head>
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
     <h2 class="alert alert-success" class="logo">
            <img src="foto/smp.jpg" style="width: 5rem;">
                SMPN 1 TARANO    
        </h2>

    <?php
    require 'setting.php';

    if (isset($_POST['simpan'])) {
        $tnik = $_POST['tnik'];
        $tnama = $_POST['tnama'];
        $tbidang = $_POST['tbidang'];
        $talamat = $_POST['talamat'];

        $sql = "INSERT INTO dataguru VALUES (NULL, '$tnik', '$tnama', '$tbidang', '$talamat')";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: dataguru.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }
    ?>
    <div class="card mt-4">
        <form action="" method="post">

            <div class="mb-2">
                <label>Nik</label>
                <input required type="text" name="tnik" class="form-control">
            </div>

            <div class="mb-2">
                <label>Nama</label>
                <input type="text" name="tnama" class="form-control">
            </div>

            <div class="mb-4">
                <label>bidang</label>
                <input type="text" name="tbidang" class="form-control">
            </div>

            <div class="mb-2">
                <label>Alamat</label>
                <textarea name="talamat" class="form-control" cols="30" rows="5"></textarea>
            </div>

            

            
        </div>
        
            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            <a href="dataguru.php" class="btn btn-secondary float-end">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>