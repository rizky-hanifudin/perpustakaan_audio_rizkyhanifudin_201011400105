<?php
session_start();
//------------------------------::::::::::::::::::::------------------------------\\
// Dibuat oleh Rizky Hanifudin \\
//------------------------------::::::::::::::::::::------------------------------\\
unset($_SESSION['id_user']);
unset($_SESSION['fullname']);
unset($_SESSION['username']);
unset($_SESSION['status']);

$_SESSION['berhasil_keluar'] = "Anda telah berhasil keluar !!";
header("location: ../../masuk");
