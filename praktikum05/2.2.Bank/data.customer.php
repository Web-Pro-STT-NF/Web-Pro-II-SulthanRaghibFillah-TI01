<!DOCTYPE html>
<html>

<head>
    <title>Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstrap5 ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- LINK FONT -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style>
    * {
        font-family: "Lucida Console", Monaco, monospace;
    }
</style>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php
                require_once 'AccountBank.php';

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

</html>