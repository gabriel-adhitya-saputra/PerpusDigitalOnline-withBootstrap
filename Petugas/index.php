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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Lainnya
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="AddBuku.php">Tambah Buku</a></li>
                  <li><a class="dropdown-item" href="../Logout.php">LOGOUT</a></li>
                </ul>
              </li>
            </div>
          </div>
        </div>
      </nav>

      <div class="text-center pt-5 mt-4">
        <h1>P  E  T  U  G  A  S</h1>
      </div>

      <table class="table">
        <a class="info-link" href="AddBuku.php">
          Tambah Buku
        </a>
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penebit</th>
            <th scope="col">TahunTerbit</th>
            <th scope="col">Aksi</th></th>
          </tr>
        </thead>
        <?php 
          include "../config.php";
          $sql="select * from buku order by BukuID desc";
              
          $hasil=mysqli_query($conn,$sql);
          $no=0;
          while ($data = mysqli_fetch_array($hasil)) {
          $no++;
        ?>
        <tbody>
          <tr> 
            <td><?php echo $no;?></td> 
            <td name="BukuID"><?php echo $data["BukuID"]; ?></td> 
            <td><?php echo $data["Judul"]; ?></td> 
            <td><?php echo $data["Penulis"];   ?></td> 
            <td><?php echo $data["Penerbit"];   ?></td>
            <td><?php echo $data["TahunTerbit"];   ?></td>
            <td><a href="HapusBuku.php?id=<?php echo $data["BukuID"]; ?>">Hapus</a>|<a href="edit_buku.php">Edit</a></a> </td>  
          </tr>
        </tbody>  
          <?php 
            }
          ?>
      </table>

      <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>