<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php
    session_start();
    $_SESSION['message'] = "Hello from session";
    setcookie('CookieName', 'Hello from cookie', time() + (60*60*24*7));
?>
    <section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">
        <?php
        /*
         * Step 1 - Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
         * Step 2 - Set a cookie that expires in one week.
         * Step 3 - Start a session and set it to value, any value you want.
         */
        if(isset($_GET['source'])) {
            echo $_GET['source'] . "<br/>";
        }

        if(isset($_COOKIE['CookieName'])) {
            echo $_COOKIE['CookieName'] . "<br/>";
        }

        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'] . "<br/>";
        }
        ?>
        <a href="9.php?source=123456789">Click Here!!!</a>
    </article><!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>