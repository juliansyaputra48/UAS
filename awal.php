<?php
    require 'setting.php';

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body background="">
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      
    </label>
    <div class="sidebar">
    <header>SMPN 1 TARANO</header>    
      <ul>  
        <li><a href="index.php"><i class="fas fa-qrcode"></i>Data Siswa</a></li>
        <li><a href="dataguru.php"><i class="fas fa-qrcode"></i>Data Guru</a></li>
        <li><a href="about.php"><i class="fas fa-qrcode"></i>Tentang</a></li>
        
      </ul>
</div>

<div class="container">
<div class="card" style="width: 45rem; left:30%; ">
  <img src="foto/smp.jpg" class="card-img-top" alt="...">
  
</div>
</div>

  </body>
</html>
