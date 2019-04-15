<?php

$pagename = "reset password";

include('header.php');

?>

<form style="margin: 50px;" action="server.php" method="post">
<div >
    <input type="email" name="email" class="input" placeholder="Your Email"/>
</div><br>
<div >
<input type="password" name="password1" class="input" placeholder="Password(8 or more digits)"/>
 </div><br>
 <div >
    <input type="password" name="password2" class="input" placeholder="Repeat your password"r/>
</div><br>

</form>




<?php include('footer.inc');?>