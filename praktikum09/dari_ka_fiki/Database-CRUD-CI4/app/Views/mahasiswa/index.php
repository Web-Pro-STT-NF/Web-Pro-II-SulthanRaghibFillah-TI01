<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white"><h1>Data Mahasiswa</h1></div>
            <div class="card-body">
               <a href="" class="btn btn-primary mb-3">Tambah Data</a>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Program Studi</th>
                            <th>IPK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php  $no = 1 ?>
                       <?php foreach($mahasiswa as $mhs) : ?>
                       <tr>
                            <td scope="row"><?= $no ?></td>
                            <td><?= $mhs->nim ?></td>
                            <td><?= ucwords($mhs->nama) ?></td>
                            <td><?= $mhs->jenis_kelamin ?></td>
                            <td><?= ucwords($mhs->tmp_lahir) ?></td>
                            <td><?= $mhs->tgl_lahir ?></td>
                            <td><?= $mhs->program_study ?></td>
                            <td><?= $mhs->ipk ?></td>
                            <td>
                               <a href="" class="btn btn-info px-3">Edit</a>
                               <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>