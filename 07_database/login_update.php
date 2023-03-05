<?php

include 'functions.php';
include 'db.php';

if(isset($_POST['submit'])) {
    updateUser();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
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
                        <?php
                            showAllData();
                        ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

