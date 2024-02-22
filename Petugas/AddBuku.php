<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <!-- Navbar -->
    <nav class="navbar bg-primary navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            Perpus Digital Online
          </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="AddBuku.php">Tambah Buku</a>
              <a class="nav-link" href="../Logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>

  <!-- content -->
    <div  style="padding-top: 4rem;">
        <h1>Tambah Buku</h1>
        <p class="text-danger">Perhatikan Data Buku</p>

            <h5 class="card-title">Tambah Buku</h5>
        </div>
        <div class="card-body">
            <form class="m-3" method="POST" action="AddBukuAksi.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Judul">Judul Buku</label>
                <input name="Judul" type="text" placeholder="Judul Buku" id="Judul" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Penulis" >Penulis</label>
                <input name="Penulis" type="text"  placeholder="Penulis" id="Penulis" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="Penerbit" >Penerbit</label>
                <input name="Penerbit" type="text"  placeholder="Penerbit" id="Penerbit" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="TahunTerbit" >Tahun Terbit</label>
                <input name="TahunTerbit" type="number"  placeholder="Tahun Terbit" id="TahunTerbit" aria-describedby="emailHelp">
            </div>
    
            <button type="submit" class="btn btn-primary" name="Register">Submit</button>
            </form>
        </div>
            <a href="index.php" class="card-link">Keluar</a>               
    </div>

    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>