<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

    <?php

    /*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
     *  Step 2: Make a forloop  that displays 10 numbers
     *  Step 3 : Make a switch Statement that test againts one condition with 5 cases
     */
    if( 1 < 10) {
        echo "I love PHP";
    } elseif (10 < 5) {
        echo "10 < 5";
    } else {
        echo "no answer";
    }

    echo "<br/>";

    for($i = 0; $i <= 20; $i++) {
        echo $i .", ";
    }

    echo "<br/>";

    $value = 5;

    switch ($value) {
        case 10:
            echo "this is it man";
            break;
        case 7:
            echo "new text";
            break;
        case 6:
            echo "old text";
            break;
        default:
            echo "default value";
            break;
    }
    ?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>