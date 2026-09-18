<?php
$host = "localhost";
$user = "u467991428_hansrajuser";
$pass = "K0hHeXRc?";
$dbname = "u467991428_hansrajdb";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
