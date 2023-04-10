<?php

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "mycandies";

$con = mysqli_connect($server_name, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    echo "Failed to connect in database.";
    exit();

} else {
    echo "Successfully connect to database!";
}