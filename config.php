<?php
$host = "localhost";
$user = "uyhezup6l0hgf";
$pass = "pr634bpk3knb";
$db   = "dbg7n2gb5zbvoo";
 
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
