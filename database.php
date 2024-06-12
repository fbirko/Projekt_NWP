<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";
$port = "3307";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname,
                    port: $port);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;