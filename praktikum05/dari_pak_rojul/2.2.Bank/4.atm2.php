<?php
require_once '3.class.account.bank.php';

$cs1 = new AccountBank("012", 50000000, "Rafi");
$cs2 = new AccountBank("035", 10000000, "Yuuki");

// $cs1->Cetak();

// echo '<hr>';
// $cs2->cetak();

// echo '<hr>Rafii transfer uang ke Yuuki 30.000 <br>';
// echo 'Biaya Admin : ' . AccountBank::$biaya_admin . '<br>';
$cs1->Transfer($cs2, 30000);
// $cs1->Cetak();

// echo '<hr>';
// $cs2->cetak();
$ar_customer = [$cs1, $cs2];


$_norek = $_POST['norek'];
$_customer = $_POST['customer'];
$_saldo = $_POST['saldo'];

$cs3 = new AccountBank($_norek, $_saldo, $_customer);
array_push($ar_customer, $cs3);

?>

<table class="table table-striped table-hover table-bordered">
    <thead>
        <th>No</th>
        <th>No. Rekening</th>
        <th>Customer</th>
        <th>Saldo</th>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_customer as $obj) {

        ?>

            <tr>
                <td><?= $nomor ?></td>
                <td><?= $obj->nomor ?></td>
                <td><?= ucwords($obj->customer) ?></td>
                <td><?= $obj->getSaldo() ?></td>
            </tr>

        <?php
            $nomor++;
        }

        ?>
    </tbody>
</table>