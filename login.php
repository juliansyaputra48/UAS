<?php
session_start();
require 'setting.php';

if (isset($_POST['login'])) {

    $username = $_POST['tusername'];
    $pass = $_POST['tpass'];

    $query = mysqli_query($koneksi, "SELECT * FROM user 
            WHERE username='$username' and pass='$pass' ");

    if (mysqli_num_rows($query) === 1) {

        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['Nama'] = $data->Nama;
        $_SESSION['status'] = $data->status;

        header('location: index.php');
    }

    echo $error = 'Username atau Password Salah';
}

?>
<!doctype html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
            <div class="card mt-3 col-5">
               <p><u><div class="alert alert card-header-white">
                    <h2  class="display">
                    <img src="foto/smp.jpg" style="width: 5rem;">
                    SMPN 1 TARANO    
                    </h2>
                </div></u></p>
                <div class="card-body col-5">
                    <form action="" method="POST">
                        <input type="text" name="tusername" class="form-control mb-3 col-5" placeholder="Masukkan Username">

                        <input type="password" name="tpass" class="form-control mb-3" placeholder="Masukkan Password">

                        <input  type="submit" value="login" name="login" class="btn btn-success float-center">  

                        <a href="awal.php" class="btn btn-secondary float-end">Kembali</a>
                    </form>


            
                </div>
            </div>         
        
    </div>
</body>

</html>