<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<div id="balance-value">
    Balance: <?php echo get_account_balance(); ?>
</div>
<script>
    let bv = document.getElementById("balance-value");
    let placeholders = document.getElementsByClassName("show-balance");
    for (let p of placeholders) {
        p.innerHTML = bv.outerHTML;
    }
    bv.remove();
    
</script>