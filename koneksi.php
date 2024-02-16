<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=dbolshop;host=127.0.0.1';
$user = 'root';
$password = '';

$dbh = new PDO($dsn, $user, $password);

?>