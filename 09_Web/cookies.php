<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Set Cookie</h1>
    <?php
        if(isset($_COOKIE["SomeName"])) {
            $someOne = $_COOKIE["SomeName"];
            echo $someOne;
        } else {
            $someOne = "";
        }
    ?>
</body>
</html>