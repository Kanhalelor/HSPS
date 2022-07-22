<?php
$host = "localhost";
$dbname = "HSPS";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("An error occured. please try agin later: " . $mysqli->connect_error);
}

return $mysqli;