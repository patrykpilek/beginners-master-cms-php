<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
    <section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">
        <?php
        /* Step 1: Use a pre-built math function here and echo it
         * Step 2: Use a pre-built string function here and echo it
         * Step 3: Use a pre-built Array function here and echo it
         */
        echo rand(1, 500) . "<br/>";

        $string = "abcedefrghijklnmoperstwqaz";
        $valueLength = strlen($string);
        echo $valueLength . "<br/>";

        $value = ["safedafa", 4568651, "dkfjalafdj", 852654, $string];
        $found = in_array($string, $value);

        if($found) {
            echo "found";
        } else {
            echo "not find";
        }

        ?>
    </article><!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>