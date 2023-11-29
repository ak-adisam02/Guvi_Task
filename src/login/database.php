<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "codingstatus";
// Create connection
$conn = mysqli_connect($hostname, $username, '', $databasename);

// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>