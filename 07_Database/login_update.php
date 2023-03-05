<?php
include 'db.php';
include 'functions.php';

updateUser();

include "includes/header.html";
?>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="post">
            <div class="mb-3">
                <label for="InputUsername" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="InputUsername" aria-describedby="usernameHelp">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
            <div class="mb-3">
                <label for="userID">Select user ID</label>
                <select name="id" id="userID">
                    <?php showAllData(); ?>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</div>
<?php
include "includes/footer.html";
?>
