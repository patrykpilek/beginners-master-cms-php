<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $number = array('lukasz', 'krystyna', 'jan');

        //print_r($number);
        echo $number[0] . "<br>";
        echo "<br>";

        // Associative Array Below
        $names = array("first_name" => 'Patryk', "Last_Name" => 'Pilek');
        //print_r($names);
        echo $names['first_name'] . " " . $names['Last_Name'];
    ?>
</body>
</html>