<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>

    <link rel="stylesheet" href="css/bootstrap5.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body class="m-2">
    <h3 class="pl-3">Belanja Online</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="test.php">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="name" name="pembeli" placeholder="Tulis Nama Anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="TV" name="barang">TV
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Kulkas" name="barang">Kulkas
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Mesin Cuci" name="barang">Mesin Cuci
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="name" name="jumlah" placeholder="Jumlah Barang" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" value="Bayar" name="bayar" class="btn-primary px-3 py-1">
                        </div>
                    </div>
                </form>
                <?php
                // define('TV', 4200000);
                // define('Kulkas', 3100000);
                // define('Mesin_Cuci', 3800000);

                $proses = isset($_POST['bayar']) ? $_POST['bayar'] : '';
                $customer = isset($_POST['pembeli']) ? $_POST['pembeli'] : '';
                $produk = isset($_POST['barang']) ? $_POST['barang'] : '';
                $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

                echo 'Nama Pembeli : ' . $customer;
                echo '<br>Produk Pilihan : ' . $produk;
                echo '<br>Jumlah Beli : ' . $jumlah;

                if ($produk == "TV") {
                    echo '<br>Total Belanja : Rp. ' . $jumlah * 4200000 .',-';
                } elseif ($produk == "Kulkas") {
                    echo '<br>Total Belanja : Rp. ' . $jumlah * 3100000 .',-';
                } elseif ($produk == "Mesin Cuci") {
                    echo '<br>Total Belanja : Rp. ' . $jumlah * 3800000 .',-';
                }
                ?>

            </div>

            <div class="col-md-4">
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active mb-0">Daftar Harga</p>
                    <div class="list-group-item">
                        TV : Rp. 4.200.000,-
                    </div>
                    <div class="list-group-item">
                        Kulkas : Rp. 3.100.000,-
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : Rp. 3.800.000,-
                    </div>
                    <p class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>