<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$base_url = "https://hansrajenterprises.com/";
$base_path = $_SERVER['DOCUMENT_ROOT'] . "/";

// DATABASE CONNECTION
$conn = mysqli_connect(
    "localhost",
    "u467991428_hansrajuser",
    "K0hHeXRc?",
    "u467991428_hansrajdb"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


?>