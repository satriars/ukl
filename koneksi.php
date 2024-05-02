<?php
$databaseHost = "localhost";
$databaseName = "login";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($mysqli){
    //echo "Koneksi ke database berhasil.<br/>";
} else{
    echo "Koneksi ke database gagal.<br/>";
}
?>