<?php
if(isset($_POST['name'])) {
    echo $_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="name">
        <button type="submit">Send</button>
    </form>
</body>
</html>