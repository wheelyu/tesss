<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home</title>


</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
            <a class="navbar-brand">Harun Abdlkrm</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/tambah') ?>">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    <h1>Form Mahasiswa</h1>
    <form action="<?= base_url('/submit') ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
    </div>
    <div class="mb-3">
        <label for="umur" class="form-label">Umur</label>
        <input type="number" class="form-control" id="umur" placeholder="Masukkan umur">
    </div>
    <div class="mb-3">
        <label for="prodi" class="form-label">Program Studi</label>
        <input type="text" class="form-control" id="prodi" placeholder="Masukkan program studi">
    </div>
    <div class="mb-3">
        <label for="asal" class="form-label">Asal</label>
        <input type="text" class="form-control" id="asal" placeholder="Masukkan asal">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.min.js"></script>


    </body>
</html>