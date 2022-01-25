<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
}

?>

<!doctype html>
<html>

<head>
    <title>Data Guru</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body >
    <div class="container">
        <h2 class="alert alert-success" class="logo">
            <img src="foto/smp.jpg" style="width: 5rem;">
            SMPN 1 TARANO     
        </h2>

        

<div class="card mt-3">
   <div class="card-header bg-primary text-black">  
        <h4>Data Guru, Selamat Datang :
            <?php echo $_SESSION['status']; ?> ->
            <?php echo $_SESSION['Nama']; ?>  

            <form class="d-flex float-end mt-2">
        <input class="" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        </form>

        
        </h4>
        

        

   </div>
    
         
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Bidang</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'setting.php';
                $query = "SELECT * FROM dataguru";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>

                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data->nik; ?> </td>
                        <td> <?php echo $data->nama; ?> </td>
                        <td> <?php echo $data->bidang; ?> </td>
                        <td> <?php echo $data->alamat; ?> </td>
                        <td>
                            <a href="edit.php?id=<?= $data->id; ?>">
                                <input type="submit" value="edit" class="btn btn-warning">
                            </a>
                            <a href="hapus.php?id=<?= $data->id ?>">
                                   

                            <?php
                            if ($_SESSION['status'] == 'Admin') {
                            ?>
                                <a href="hapus.php?id=<?= $data->id ?>">
                                    <input type="submit" value="hapus" onclick="confirm('yakin hapus data?')" class="btn btn-danger">
                                </a>

                            <?php
                            }
                            ?>

                        </td>

                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
         <h2>

            <a href="tambahguru.php" class="btn btn-success">Tambah Data</a>   

            
                            
            <a href="logout.php" class="btn btn-danger float-end mb-3">Logout</a>

        </h2>
    </div>

<script type="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>