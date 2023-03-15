<?php

if(isset($_POST['create_user'])) {
    $user_firstname    = $_POST['user_firstname'];
    $user_lastname     = $_POST['user_lastname'];
    $user_role         = $_POST['user_role'];
    $username          = $_POST['username'];
    $user_email        = $_POST['user_email'];
    $user_password     = $_POST['user_password'];

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role,username, user_email, user_password) ";
    $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$username}', '{$user_email}', '{$user_password}')";

    $create_user_query = mysqli_query($connection, $query);

    confirmQuery($create_user_query);
}

?>
<form action="" method="post">

    <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" id="lastname" class="form-control" name="user_lastname">
    </div>

    <div class="form-group">
        <label for="role">User Role</label>
        <select name="user_role" id="role">
            <option value="">Select Options</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" id="password" class="form-control" name="user_password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>
</form>
    