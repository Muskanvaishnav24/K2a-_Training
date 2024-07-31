<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name or IP address
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "housing_laravel"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$id = $_GET['id']; // Assuming id is passed through URL parameter

// SQL query to delete record
$sql = "DELETE FROM tbl_wings_settings WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close connection
$conn->close();
?>
