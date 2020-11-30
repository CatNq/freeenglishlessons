<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "freeenglishlessons";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection to database failed".mysqli_connect_error());
}