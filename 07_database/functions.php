<?php
include 'db.php';

function createUser() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', 'secret', 'loginapp');

        $query = "INSERT INTO users(username, password) VALUES ('$username','$password')";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('query failed');
        } else {
            echo "Record created";
        }
    }
}

function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('query failed');
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser() {
    global $connection;

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed");
        } else {
            echo "Record updated";
        }
    }
}

function deleteUser() {
    global $connection;

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = '$id'";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query failed");
        } else {
            echo "Record deleted";
        }
    }
}
