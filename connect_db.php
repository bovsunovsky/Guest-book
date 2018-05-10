<?php
$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$db_name = 'guestbook';
$connections = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($connections));
mysqli_query($connections, "SET NAMES 'utf8'");