<?php
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$login = mysqli_query($mysqli,"select * from user where username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin/user.php");

    }else if($data['level']=="user"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
       

    // alihkan ke halaman dashboard user
    header("location:user/web saya.php");

}else{
    
    // alihkan ke halaman login kembali
    header("location:index.php");
}
}else{
    header("location:index.php?pesan=gagal");
}
?>