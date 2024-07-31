<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housing_laravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $soc_id = $_POST['soc_id'];
    $wing_name = $_POST['wing_name'];
    $floor_no = $_POST['floor_no'];
    $no_of_flate = $_POST['no_of_flate'];
    $created_by = $_POST['created_by'];
    $updatedBy = $_POST['updatedBy'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    // SQL query to update the record
    $sql = "UPDATE tbl_wings_flate_settings SET 
            soc_id = '$soc_id', 
            wing_name = '$wing_name', 
            floor_no = '$floor_no', 
            no_of_flate = '$no_of_flate', 
            created_by = '$created_by', 
            updatedBy = '$updatedBy', 
            created_at = '$created_at', 
            updated_at = '$updated_at'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
