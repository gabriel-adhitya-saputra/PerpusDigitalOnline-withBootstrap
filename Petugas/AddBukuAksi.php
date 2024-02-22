<?php

require_once ('../config.php');

if(isset($_POST['Register'])){

    $Judul = filter_input(INPUT_POST, 'Judul', FILTER_SANITIZE_STRING);
    $Penulis = filter_input(INPUT_POST, 'Penulis', FILTER_SANITIZE_STRING);
    $Penerbit = filter_input(INPUT_POST, 'Penerbit', FILTER_SANITIZE_STRING);
    $TahunTerbit = filter_input(INPUT_POST, 'TahunTerbit', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO buku(Judul, Penulis, Penerbit, TahunTerbit)
            VALUES(:Judul, :Penulis, :Penerbit, :TahunTerbit)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":Judul" => $Judul,
        ":Penulis" => $Penulis,
        ":Penerbit" => $Penerbit,
        ":TahunTerbit" => $TahunTerbit
    );

    $saved = $stmt->execute($params);

    if($saved) header("location: index.php");
}