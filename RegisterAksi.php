<?php
require_once ("config.php");

if(isset($_POST['Register'])){

    $NamaLengkap = filter_input(INPUT_POST, 'NamaLengkap', FILTER_SANITIZE_STRING);
    $Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING);

    $Password = strip_tags($_POST ['Password']);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Alamat = filter_input(INPUT_POST, 'Alamat', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO user(Username, Password, Email, NamaLengkap, Alamat)
            VALUES(:Username, :Password, :Email, :NamaLengkap, :Alamat)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":NamaLengkap" => $NamaLengkap,
        ":Username" => $Username,
        ":Password" => $Password,
        ":Email" => $Email,
        ":Alamat" =>$Alamat,
    );

    $saved = $stmt->execute($params);

    if($saved) header("location: index.html");
}

?>