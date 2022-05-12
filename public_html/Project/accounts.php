<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$user_account_info = get_user_account();
?>

<div class="container-fluid">
    <h1>My Accounts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Account Number</th>
                <th scope="col">Account Type</th>
                <th scope="col">Balance</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through all the accounts associated with the user -->
            <?php foreach ($user_account_info as $account) : ?>
                <tr>
                    <?php $account_num = $account["account_num"] ?>
                    <!-- Send account information using GET for information page -->
                    <td><a href="account_information.php?acc_id=<?php echo $account["id"]; ?>"><?php echo $account_num ?></a></td>
                    <td><?php echo $account["account_type"] ?></td>
                    <td><?php echo $account["balance"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>