<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
//variable to hold transactions information
//use the account number to match with the transactions table
$account_id = $_GET["acc_id"];
$transaction_data = get_transaction_data($account_id);
?>

<div class="container-fluid">
    <h1>Transaction History</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Transaction ID</th>
                <th scope="col">Account Source</th>
                <th scope="col">Account Destination</th>
                <th scope="col">Balance Change</th>
                <th scope="col">Transaction Type</th>
                <th scope="col">Memo</th>
                <th scope="col">Created</th>
                <th scope="col">Expected Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaction_data as $transaction) : ?>
                <tr>
                    <?php $transaction_id = $transaction["transaction_id"] ?>
                    <?php $account_source = $transaction["account_source"] ?>
                    <?php $account_dest = $transaction["account_dest"] ?>
                    <?php $balance_change = $transaction["balance_change"] ?>
                    <?php $transaction_type = $transaction["transaction_type"] ?>
                    <?php $memo = $transaction["memo"] ?>
                    <?php $time_created = $transaction["created"] ?>
                    <?php $expected_total = $transaction["expected_total"] ?>
                    <td><?php echo $transaction_id ?></td>
                    <td><?php echo $account_source ?></td>
                    <td><?php echo $account_dest ?></td>
                    <td><?php echo $balance_change ?></td>
                    <td><?php echo $transaction_type ?></td>
                    <td><?php echo $memo ?></td>
                    <td><?php echo $time_created ?></td>
                    <td><?php echo $expected_total ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>