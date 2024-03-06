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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/tambah') ?>">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<table class="table" style="width: 60%; margin-left: auto; margin-right: auto; padding: 10px" border="1">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Program Studi</th>
            <th scope="col">Asal</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach($data_mahasiswa as $row):
                $id = $row['id'];
                $nama = $row['nama'];
                $umur = $row['umur'];
                $prodi = $row['prodi'];
                $asal = $row['asal'];
        ?>
        <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $nama ?></td>
            <td><?= $umur ?></td>
            <td><?= $prodi ?></td>
            <td><?= $asal ?></td>
            <td>
                <a href="/edit/<?= $id ?>" class="btn btn-warning">Edit</a>
                <a href="/hapus/<?= $id ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach; 
        ?>


    </tbody>
</table>


</body>
</html>