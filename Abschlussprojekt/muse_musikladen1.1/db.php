<?php
$dbname="musikladen";
$dbhost="localhost";
$dbuser="root";
$dbpass="";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);

$db = new MySQLi ('Localhost','root','','musikladen') ;

?>