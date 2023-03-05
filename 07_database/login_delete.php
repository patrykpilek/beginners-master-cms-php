<?php
include 'db.php';
include 'functions.php';

deleteUser();

include "includes/header.html";
?>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Delete User</h1>
        <form action="login_delete.php" method="post">
            <div class="mb-3">
                <label for="userID">Select user ID</label>
                <select name="id" id="userID">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Delete</button>
        </form>
    </div>
</div>
<?php
include "includes/footer.html";
?>
