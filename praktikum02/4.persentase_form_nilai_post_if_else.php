<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body class="mx-3">
    <div class="row">
        <div class="col-12 bg-primary text-white py-2">
            <h4>Sistem Penilaian</h4>
        </div>
    </div>
    <h3 class="mt-2">Form Nilai Siswa</h3>
    <hr>
    <form method="POST" action="4.persentase_form_nilai_post_if_else.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Tulis Nama Anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label text-right">Mata Kuliah</label>
            <div class="col-8">
                <select id="select" name="matkul" class="custom-select">
                    <option value="Mohon Pilih MatKul Anda">Silahkan Pilih</option>
                    <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="PPKn">PPKn</option>
                    <option value="Statisk dan Probabilitas">Statisk dan Probabilitas</option>
                    <option value="B. Inggris">B. Inggris</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="number" class="col-4 col-form-label text-right">Nilai UTS</label>
            <div class="col-3">
                <input id="number" name="nilai_uts" placeholder="Masukan Nilai" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="number" class="col-4 col-form-label text-right">Nilai UAS</label>
            <div class="col-3">
                <input id="number" name="nilai_uas" placeholder="Masukan Nilai" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="number" class="col-4 col-form-label text-right">Nilai Tugas/Praktikum</label>
            <div class="col-3">
                <input id="number" name="nilai_tugas" placeholder="Masukan Nilai" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <input type="submit" value="Simpan" name="proses" class="btn-primary px-3 py-1">
            </div>
        </div>
    </form>

    <?php
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    if (!empty($proses)) {
        echo 'Nama : ' . ucwords($nama_siswa);
        echo '<br>Mata Kuliah : ' . $mata_kuliah;
        echo '<br>Nilai UTS : ' . $nilai_uts;

        if ($nilai_uts  > 55) {
            $persentase_uts = $nilai_uts * 54 / 100;
            echo ', "Selamat Anda Dinyatakan Lulus"';
        } else {
            $persentase_uts = $nilai_uts * 54 / 100;
            echo ', "Maaf Anda Tidak Lulus"';
        }


        echo '<br>Nilai UAS : ' . $nilai_uas;
        if ($nilai_uas  > 55) {
            $persentase_uas = $nilai_uas * 63 / 100;
            echo ', "Selamat Anda Dinyatakan "Lulus" ';
        } else {
            $persentase_uas = $nilai_uas * 63 / 100;
            echo ', "Maaf Anda Tidak Lulus" ';
        }


        echo '<br>Nilai Tugas Praktikum : ' . $nilai_tugas;
        if ($nilai_tugas  > 55) {
            $persentase_tugas = $nilai_tugas * 63 / 100;
            echo ', Selamat Anda Dinyatakan "Lulus" ';
        } else {
            $persentase_tugas = $nilai_tugas * 63 / 100;
            echo ', "Maaf Anda Tidak Lulus" ';
        }


        echo '<hr>';
        echo 'Persentase UTS : ' . $persentase_uts . '%';
        echo '<br>Persentase UAS : ' . $persentase_uas . '%';
        echo '<br>Persentase Tugas Praktikum : ' . $persentase_tugas . '%';
    }
    ?>

    <div class="row">
        <div class="col-12 bg-primary text-white py-2 mt-2">
            <p class="mb-0">Develop by Mahasiswa STT NF</p>
        </div>
    </div>
</body>

</html>