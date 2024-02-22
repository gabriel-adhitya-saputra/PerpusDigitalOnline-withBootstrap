<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "perpusdigital";

$conn = mysqli_connect($host, $user, $password, $dbname);

try{
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}catch(PDOException $e){
    die("terjadi masalah: " . $e->getMessage());
}