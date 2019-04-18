<?php

$pagename = "reset password";

include('header.php');
include('server.php');

?>

<form style="margin: 50px;" action="reset-password.php" method="post">
    

    <label>Please give your email.</label>
    <div>
        <?php include('errors.php') ?>
    </div>
    <div >
        <input type="email" name="email" class="input" placeholder="Your Email"/>
    </div><br>
    <input type="submit" name="answer-submit" class="form-submit" value="Submit Email"/>


</form>




<?php include('footer.inc');?>