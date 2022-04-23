<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<form method="POST" action="6.form.atm.php">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label text-right">Rekening</label>
        <div class="col-3">
            <input id="nama" name="norek" placeholder="Tulis Nama Anda" type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label for="number" class="col-4 col-form-label text-right">Customer</label>
        <div class="col-3">
            <input id="number" name="customer" placeholder="Masukan Nilai" type="text" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label for="number" class="col-4 col-form-label text-right">Saldo Awal</label>
        <div class="col-3">
            <input id="number" name="saldo" placeholder="Masukan Nilai" type="number" class="form-control">
        </div>
    </div>
    
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" value="Simpan" name="proses" class="btn-primary px-3 py-1">
        </div>
    </div>
</form>