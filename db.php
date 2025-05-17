<?php
$host = "sql207.infinityfree.com";         // <-- Replace with your actual MySQL host
$user = "if0_39008613";            // <-- Replace with your InfinityFree username
$password = "0hJrom2tcSSY";     // <-- Replace with your DB password
$db = "if0_39008613_crud_db";      // <-- Replace with your full DB name

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
