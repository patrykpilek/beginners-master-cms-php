<?php
include "db.php";
include "functions.php";

include "includes/header.html";
?>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">All Users</h1>
        <?php readAllUser(); ?>
    </div>
</div>
<?php
include "includes/footer.html";
?>

