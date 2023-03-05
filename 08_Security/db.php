<?php
$connection = mysqli_connect('localhost', 'root', 'secret', 'loginapp');

if(!$connection) {
    die("not connected");
}