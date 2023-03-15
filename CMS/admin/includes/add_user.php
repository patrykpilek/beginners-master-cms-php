<?php

if(isset($_POST['create_user'])) {
    echo "Test";
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
            <?php
                $query = "SELECT * FROM users";
                $select_users = mysqli_query($connection, $query);

                confirmQuery($select_users);

                while($row = mysqli_fetch_assoc($select_users )) {
                    $user_id = $row['user_id'];
                    $user_role = $row['user_role'];

                    echo "<option value='$user_id'>{$user_role}</option>";
                }
            ?>
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
    