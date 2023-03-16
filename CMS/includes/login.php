<?php
include "db.php";

if(isset($_POST['login'])){
    echo $_POST['username'];
    echo $_POST['password'];
}