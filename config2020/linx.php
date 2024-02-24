<?php
$host = "localhost";//my host name
$username ="root";//my username
$password ="7546";//my password
$db_name = "photos";//my database
//connect to my database

$handle_event = mysqli_connect ($host, $username, $password) or die ("can not connect to server");
mysqli_select_db($handle_event, $db_name)or die("can not select database");
?>