<?php
//------------------------------::::::::::::::::::::------------------------------\\
// Dibuat oleh Rizky Hanifudin \\
//------------------------------::::::::::::::::::::------------------------------\\
$server = "https://publikasimahasiswa.id/";
$username = "publika7_db_perpustakaan";
$password = "db_perpustakaan";
$database = "publika7_db_perpustakaan";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
