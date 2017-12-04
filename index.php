<?php
include ("dbconnect.php");
$query = "SELECT level FROM login";
$result = mysql_query($query) or die(mysql_error());

$query1 = "SELECT camp FROM login";
$result1 = mysql_query($query1) or die(mysql_error());

$query2 = "SELECT user,pass FROM login";
$result2 = mysql_query($query2) or die(mysql_error());

$option = "";

while ($row = mysql_fetch_array($result)) {

       $group = $row['level'];
       $option .= "<OPTION VALUE =\"$group\">".$group;
       }

$option1 = "";

while ($row1 = mysql_fetch_array($result1)) {

       $campaign = $row1['camp'];
       $option1 .= "<OPTION VALUE =\"$campaign\">".$campaign;
       }

while($row2 = mysql_fetch_array( $result2 )){
       $user =  $row2['user'];
       $pass =  $row2['pass'];
       }
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
                      <option>admin</option>
                      <option>client</option>
                      <option>qa</option>
</select></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<iframe
name="iframe"
width="70%"
height="40%"
#src="http://www.islandlogic.com/images/banners/customer-care.jpg"
frameborder="no"
scrolling="auto">
</iframe>
</body>
</html>
