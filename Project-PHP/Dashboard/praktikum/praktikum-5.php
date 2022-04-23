<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header pb-1">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Praktikum 05</b></h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <hr class="mb-3 mt-2">
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Fruit Extends</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                require_once 'class.praktikum-5/class.fruit.php';
                require_once 'class.praktikum-5/class.strawberry.php';


                $strawberry = new Strawberry("Strawberry", "Red");
                $strawberry->message();
                $strawberry->intro();
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Dispenser</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                require_once 'class.praktikum-5/class.dispenser.php';
                $penjual = new Dispenser("Big Cola", "");
                echo '<b>Mesin penjual : ' . $penjual->nama_muniman;
                echo '<br>Memiliki kapasitas Volume Galon sebesar : ' . number_format($penjual->getVolume()) . 'ml</b>';
                echo "<br>";
                echo "<br>";

                $pembeli1 = new Pembeli('Rafii', 5, 'Big Cola');
                echo $pembeli1->getStrukPenjualan();
                echo "<br>";
                echo "<br>";
                $pembeli2 = new Pembeli('Yuuki', 2, 'Big Cola');
                echo $pembeli2->getStrukPenjualan();
                echo "<br>";
                echo "<br>";
                $pembeli3 = new Pembeli('Raghib', 4, 'Big Cola');
                echo $pembeli3->getStrukPenjualan();
                echo "<br>";
                echo "<br>";
                echo Pembeli::tambahVolume(1000);
                ?>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Bank</b></h3>
            </div>
            <div class="card-body pt-2">
                <?php
                require_once 'class.praktikum-5/AccountBank.php';
                ?>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php
                                $C001 = new AccountBank('C001', 6000000, 'Ahmad');
                                $C002 = new AccountBank('C002', 5350000, 'Budi');
                                $C003 = new AccountBank('C003', 2500000, 'Kurniawan');
                                $ar_customer = [$C001, $C002, $C003];
                                ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="thead-dark align-center">
                                        <tr>
                                            <th style="vertical-align: middle;">No</th>
                                            <th style="vertical-align: middle;">No. Account</th>
                                            <th style="vertical-align: middle;">Pemilik</th>
                                            <th style="vertical-align: middle;">Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($ar_customer as $cust) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $cust->getNomer() ?></td>
                                                <td><?= ucwords($cust->getCustomer()) ?></td>
                                                <td><?= number_format($cust->getSaldo()) ?></td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php
                                echo $C001->getCustomer() . ' menabung 1,000,000' . $C001->Deposit(1000000) . ', sehingga saldo ' . $C001->getCustomer() . ' menjadi ' . number_format($C001->getSaldo());
                                echo '<br><br>';

                                echo $C001->getCustomer() . ' transfer uang sebesar 5,000,000' . $C001->Transfer($C003, 1500000) . ', kepada ' . $C003->getCustomer() . ' 
                dan dikenai biaya admin sebesar ' . number_format($C001->getBiayaAdmin()) . ' sisa saldo ' . $C001->getCustomer() . ' sebesar ' . number_format($C001->getSaldo()) . '
                <br>Kemudian ' . $C001->getCustomer() . ' transfer juga kepada ' . $C002->getCustomer() . ' sebesar 500,000' . $C001->Transfer($C002, 500000) . '
                dan dikenai biaya admin sebesar ' . number_format($C001->getBiayaAdmin()) . ', sisa saldo ' . $C001->getCustomer() . ' sebesar ' . number_format($C001->getSaldo());
                                echo '<br><br>';

                                echo $C002->getCustomer() . ' menarik uang sebesar 2,500,000' . $C002->Withdraw(2500000) . '. Sehingga sisa saldo ' . $C002->getCustomer() . ' adalah sebesar ' . number_format($C002->getSaldo());
                                echo '<br><br>';
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="thead-dark align-center">
                                        <tr>
                                            <th style="vertical-align: middle;">No</th>
                                            <th style="vertical-align: middle;">No. Account</th>
                                            <th style="vertical-align: middle;">Pemilik</th>
                                            <th style="vertical-align: middle;">Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($ar_customer as $cust) {
                                        ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $cust->getNomer() ?></td>
                                                <td><?= ucwords($cust->getCustomer()) ?></td>
                                                <td><?= number_format($cust->getSaldo()) ?></td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="card-footer">
                Footer
            </div>
    </section>
</div>
<?php
include_once 'footer.php';
?>