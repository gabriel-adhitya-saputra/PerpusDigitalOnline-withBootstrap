<?php
require_once ("../config.php");

if(isset($_POST['Register'])){

    $NamaLengkap = filter_input(INPUT_POST, 'NamaLengkap', FILTER_SANITIZE_STRING);
    $Username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING);

    $Password = strip_tags($_POST ['Password']);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Alamat = filter_input(INPUT_POST, 'Alamat', FILTER_SANITIZE_STRING);
    $Level = filter_input(INPUT_POST, 'Level', FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO user(Username, Password, Email, NamaLengkap, Alamat, Level)
            VALUES(:Username, :Password, :Email, :NamaLengkap, :Alamat, :Level)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":NamaLengkap" => $NamaLengkap,
        ":Username" => $Username,
        ":Password" => $Password,
        ":Email" => $Email,
        ":Alamat" =>$Alamat,
        ":Level" =>$Level
    );

    $saved = $stmt->execute($params);

    if($saved) header("location: AddPtugas.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital online</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            Perpus Digital Online
          </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Lainnya
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="AddPtugas.php">Tambah Petugas/User</a></li>
                  <li><a class="dropdown-item" href="AddBuku.php">Tambah Buku</a></li>
                  <li><a class="dropdown-item" href="../Logout.php">LOGOUT</a></li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </nav>


    <div class="pt-5 mt-4">
        <form action="" method="POST">
            <h1>Register</h1>

            <div class="mb-3">
                <label for="Username">Username</label>
                <input type="text" name="Username" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" name="Password" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="Email">Email</label>
                <input type="Email" name="Email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="NamaLengkap">Nama Lengkap</label>
                <input type="text" name="NamaLengkap" placeholder="NamaLengkap">
            </div>
            <div class="mb-3">
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="Level">Level</label>
                <input type="text" name="Level" placeholder="Level">
            </div>

            <p>Code login
                <li>
                    0014DM1N
                </li>
                <li>
                    P3TUG4S
                </li>
                <li>
                    PEMINJAM
                </li>
            </p>

            <input type="submit" name="Register" value="submit">
        </form>
    </div>
    
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>