<?php
include ("dbconnect.php");
         if(! $link ){
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully<br />'
?>

<html>
<head><title>Member Login</title></head>
<body>
<center>
<img src = "/dxc_logo_hz_wht_rgb_150.png" ></img>
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
<iframe
name="iframe"
width="70%"
height="40%"
src="http://www.dxc.technology/"
frameborder="no"
scrolling="auto">
</iframe>
</body>
</html>
