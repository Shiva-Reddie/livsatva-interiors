<?php
$host     = "localhost"; // Database Host
$user     = "nayanagr_nayanagroup"; // Database Username
$password = "nayanagroup@2025"; // Database's user Password
$database = "nayanagr_nayanagroup"; // Database Name



// $host     = "localhost"; // Database Host
// $user     = "root"; // Database Username
// $password = ""; // Database's user Password
// $database = "nayanagroup_blog"; // Database Name

$connect = new mysqli($host, $user, $password, $database);

// Checking Connection
if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($connect, "utf8mb4");

$base_url = "https://nayanagroup.com/blog/";

$site_url = "https://nayanagroup.com/";
