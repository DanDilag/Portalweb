<?php
include ("dbconnect.php");
$query = "SELECT user_lvl FROM user_tbl";
$result = mysql_query($query) or die(mysql_error());

$query1 = "SELECT username FROM user_tbl";
$result1 = mysql_query($query1) or die(mysql_error());

$query2 = "SELECT username,password FROM user_tbl";
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
<head><title>Member Login</title>
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
<H2>Please login again</H2>
<form name="LoginForm" action="verify.php" method="post" type="" >
<p><b>Username:<input name="user" size="25" type="text" /></b></p>
<p><b>Password:<input name="pass" size="25" type="password" /></b></p>
<p><select name=group><option>User Level</option>
                      <option>Admin</option>
                      <option>User</option>
</select>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
</body>
</html>
