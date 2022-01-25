<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'uas';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Koneksi gagal: ' . mysqli_connect_error());


}
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
            WHERE
            nim LIKE '%$keyword%' OR
            prodi LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' 
            "; //mencari sesuatu dengan flexibel

    return query ($query);
}

?>