<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$user_account_info = get_user_account();
?>

<?php
//show account number, type, balance, opened/created date 
//show transaction history from transaction table
//limit the results to 10
//store the account ID in a variable so that I can use it in a query to find all the information
$account_id = $_GET["acc_id"];
//SELECT [desired columns] FROM Transactions JOIN Accounts a on a.id = Transactions.src JOIN Accounts b on Transactions.dest = b.id WHERE Transactions.src = :account_id
//query to select all transaction data for the account number selected.
?>
<div class="container-fluid">
    <a href="transaction_history.php?acc_id=<?php echo $account_id; ?>" class="btn btn-primary">Transaction History</a>
</div>
<div class="container-fluid">
    <h1>Account Information</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Account Number</th>
                <th scope="col">Account Type</th>
                <th scope="col">Balance</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
