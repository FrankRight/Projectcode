<?php

$pagename = "reset password";

include('header.php');
include('server2.php');

?>

<form style="margin: 50px;" action="reset.php" method="post">
<?php include('errors.php')?>
<div >
<input type="password" name="password1" class="input" placeholder="New Password(8 or more digits)"/>
 </div><br>
 <div >
    <input type="password" name="password2" class="input" placeholder="Repeat your new password"r/>
</div><br>
<input type="submit" name="pass" class="form-submit" value="Submit"/>

</form>




<?php include('footer.inc');?>