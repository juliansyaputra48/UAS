<!doctype html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-info">Tambah Data Mahasiswa</h2>

<?php
    require 'setting.php';
    if (isset($_POST['simpan'])) {
        $id = $_POST['tid'];
        $tnim = $_POST['tnim'];
        $tnama = $_POST['tnama'];
        $talamat = $_POST['talamat'];
        $tprodi = $_POST['tprodi'];

        $sql = "UPDATE mahasiswa SET 
        nim='$tnim',nama='$tnama',alamat='$talamat',prodi='$tprodi' WHERE id=$id";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: index.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }else{
        $id=$_GET['id'];
        $query="SELECT * FROM mahasiswa WHERE id=$id";
        $sql=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>

    
    

    <form action="" method="post">
        <input type="hidden" name="tid" value="<?=$id?>">
        <div class="mb-3">
            <label>Nim</label>
            <input required type="text" name="tnim" class="form-control" value="<?=$data->nim;?>">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="tnama" class="form-control" value="<?=$data->nama;?>">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="talamat" class="form-control" cols="30" rows="5">
                <?=$data->alamat;?>
            </textarea>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="tprodi" class="form-control" value="<?=$data->prodi;?>">
        </div>

        

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

</div>
</body>
</html>