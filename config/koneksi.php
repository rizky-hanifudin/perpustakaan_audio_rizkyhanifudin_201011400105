<?php
//------------------------------::::::::::::::::::::------------------------------\\
// Dibuat oleh Rizky Hanifudin \\
//------------------------------::::::::::::::::::::------------------------------\\
$server = "sql200.infinityfree.com";
$username = "epiz_33691081";
$password = "IwZOrtfZbREYfz";
$database = "epiz_33691081_db_perpustakaan";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
