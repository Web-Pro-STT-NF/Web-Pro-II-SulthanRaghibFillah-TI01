<form method="POST" action="">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label text-right">Nama Lengkap</label>
        <div class="col-3">
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
require_once '3.libfungsi.php';

$proses = isset($_POST['proses']) ? $_POST['proses'] : '';
$nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
$mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
$nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
$nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

if (!empty($proses)) {
    echo 'Nama : ' . ucwords($nama_siswa);
    echo '<br>Mata Kuliah : ' . $mata_kuliah;
    echo '<br>Nilai UTS : ' . $nilai_uts;
    echo '<br>Nilai UAS : ' . $nilai_uas;
    echo '<br>Nilai Tugas Praktikum : ' . $nilai_tugas;

    echo '<hr>';
    // cetak fungsi persentase
    $total_nilai = Persentase($nilai_uts, $nilai_uas, $nilai_tugas);
    echo 'Total Nilai Anda : <b>' . $total_nilai . '</b>';

    // cetak fungsi kelulusan
    $hasil_ujian = Kelulusan($total_nilai);
    echo '<br>Dinyatakan : <b>' . $hasil_ujian . '</b>';

    // cetak fungsi Grade
    $grade_ujian = Grade($total_nilai);
    echo '<br>Dengan : <b>' . $grade_ujian . '</b>';

    // cetak fungsi predikat
    $predikat = Predikat($grade_ujian);
    echo '<br>Dengan Predikat : <b>' . $predikat . '</b>';
}
?>

</b>
<div class="row">
    <div class="col-12 bg-primary text-white py-2 mt-2">
        <p class="mb-0">Develop by Mahasiswa STT NF @2022</p>
    </div>
</div>
</body>

</html>