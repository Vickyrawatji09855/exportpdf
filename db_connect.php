<?php
/* Database connection start */
$servername = "127.0.0.1:8111";
$username = "root";
$password = "";
$dbname = "note";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>