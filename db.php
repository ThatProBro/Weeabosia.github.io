<?php

$mysql_hostname = "127.0.0.1";
$mysql_username = "root";
$mysql_database = "weeabosia";
$db = mysqli_connect ($mysql_hostname, $mysql_username)
or die("Something is Broken");

mysqli_select_db($db, $mysql_database) or die("Couldn't find Database");
?>