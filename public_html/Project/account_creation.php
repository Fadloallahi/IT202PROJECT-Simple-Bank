<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<h1 class="text-center mt-4">Create New Account</h1>
<div class="container-fluid">
    <form  onsubmit="return validate(this)" method="POST">
    <!-- account type select options -->
    <label>Please Select An Account Type</label>
        <select class="form-select" name="account_type">
            <option value="checking">Checking</option>
            <option value="savings">Savings</option>
        </select>
        <br><br>
    <!-- initial deposit input field --> 
        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
                <input type="number" id="initial_deposit" name="deposit" placeholder="Please enter a minimum of $5 for your first deposit" class="form-control" min="5.0" step="0.01">
            <span class="input-group-text">.00</span>
        </div>
        <input type="submit" name="create" class="btn btn-primary" value="Create Account"/>
    </form>
</div>

<?php
//validaton for when create button is clicked
if (isset($_POST["create"])) {
    create_account($_POST["account_type"], $_POST["deposit"]);
    die(header('Location: accounts.php'));
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>




