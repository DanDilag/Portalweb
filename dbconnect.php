<?php
$VARDB_server = 'localhost';
$VARDB_user = 'dbadmin';
$VARDB_pass = 'w3b@dm1n';
$VARDB_database = 'rtpadb';

$link=mysql_connect("$VARDB_server", "$VARDB_user", "$VARDB_pass");
mysql_select_db("$VARDB_database");
?>
