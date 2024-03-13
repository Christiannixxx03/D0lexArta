

<?php
// Connection to MySQL database
$servername = "localhost";
$username = "admin@admin.com";
$password = "admin";
$dbname = "feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
