<?php //login.php
$db_hostname = '127.0.0.1';
$db_database = 'rubishop';
$db_username = 'root';
$db_password = '';

// Connect to server.
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
    or die("Unable to connect to MySQL: " . mysqli_error());


?>
