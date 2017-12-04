<?php
include ("dbconnect.php");
         if(! $link ){
            die('Could not connect: ' . mysql_error());
         }
?>

<html>
<head>
<title>Member Login</title>
<style>
div {
    background-color: black;
}
</style>
</head>
<body>
<div>
<p>
<img src="dxc_logo_hz_wht_rgb_150.png" alt="DXC Logo" width="400" height="100">
</p>
</div>
<center>
<H1>RTPA Portal Login</H1>
<form name="LoginForm" action="../trans/verify.php" method="post">
<p><b>Username:<input name="user" size="25" type="text" /></b></p>
<p><b>Password:<input name="pass" size="25" type="password" /></b></p>
<p><select name=group><option>User Level</option>
                      <option>Admin</option>
                      <option>User</option>
</select></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
</body>
</html>
