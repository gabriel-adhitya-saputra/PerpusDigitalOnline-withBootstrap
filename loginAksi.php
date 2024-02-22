<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "perpusdigital"; 
$koneksi = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()){
echo "Koneksi gagal : " . mysqli_connect_error();
}

session_start();

$username = $_POST['Username'];
$password = $_POST['Password'];

$user = mysqli_query($koneksi, "select * from user where UserName='$username' and Password='$password'");

$cek = mysqli_num_rows($user);

if($cek > 0){
    $data = mysqli_fetch_assoc($user);

    if($data['Level'] == '0014DM1N'){
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = '0014DM1N';

        header('location: Admin/index.php');

    }elseif($data['Level'] == 'P3TUG4S'){
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = 'P3TUG4S';

        header('location: Petugas/index.php');

    }elseif($data['Level'] == 'PEMINJAM') {
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = 'PEMINJAM';

        header('location: Peminjam/index.php');
    }
        
}else{
    header("location:login.php?pesan=gagal");
}