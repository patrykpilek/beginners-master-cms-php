<?php
include "includes/db.php";
include "includes/header.php";
include "includes/navigation.php";

if(isset($_POST['submit'])) {
    $to         = "patryk.pilek@gmail.com";
    $subject    = $_POST['subject'];
    $body       = $_POST['body'];

    if (mail($to, $subject, $body)) {
        echo ("Message successfully sent!");
    } else {
        echo ("Message delivery failed...");
    }
}

?>

<!-- Page Content -->
<div class="container">
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="form-wrap">
                        <h1>Contact</h1>
                        <form role="form" action="" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email">
                            </div>

                            <div class="form-group">
                                <label for="subject" class="sr-only">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter your Subject">
                            </div>
                            <div class="form-group">
                                <label for="body" class="sr-only">Subject</label>
                                <textarea class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
                            </div>

                            <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit">
                        </form>

                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>


    <hr>


    <?php include "includes/footer.php"; ?>
