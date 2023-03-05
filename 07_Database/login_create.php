<?php
include "db.php";
include "functions.php";

createUser();

include "includes/header.html";
?>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Create User</h1>
        <form action="login_create.php" method="post">
            <div class="mb-3">
                <label for="InputUsername" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="InputUsername" aria-describedby="usernameHelp">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
</div>
<?php
include "includes/footer.html";
?>
