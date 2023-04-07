<?php
include "includes/db.php";
include "includes/header.php";

echo loggedInUserId();

if(userLikedThisPost(113)){
    echo "USER LIKED IT";
} else {
    echo "USER DID NOT LIKE IT";
}