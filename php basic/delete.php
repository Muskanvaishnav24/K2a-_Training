<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $stu_id = $_GET["id"];

    // Prepare and bind
    $sql_delete = "DELETE FROM student WHERE stu_id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $stu_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Record deleted successfully.</div>';
    } else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Error deleting record: ' . $conn->error . '</div>';
    }

    $stmt->close();
} else {
    $_SESSION['message'] = '<div class="alert alert-warning" role="alert">No student ID provided.</div>';
}

$conn->close();

// Redirect back to the main page after deletion
header("Location: studentslist.php");
exit();
?>
