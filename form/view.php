<?php
// Database connection details (adjust as necessary)
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

// Retrieve the record based on ID from GET request
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch the record data
    $sql = "SELECT id, soc_id, wing_name, floor_no, no_of_flate, created_by, updatedBy, created_at, updated_at FROM tbl_wings_flate_settings WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo '<div class="alert alert-danger" role="alert">
                No record found for the provided ID.
              </div>';
        exit();
    }
} else {
    echo '<div class="alert alert-danger" role="alert">
            Invalid request.
          </div>';
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .record-detail {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>View Record</h2>
        <div class="record-detail"><strong>ID:</strong> <?php echo $row['id']; ?></div>
        <div class="record-detail"><strong>Society ID:</strong> <?php echo $row['soc_id']; ?></div>
        <div class="record-detail"><strong>Wing Name:</strong> <?php echo $row['wing_name']; ?></div>
        <div class="record-detail"><strong>Floor Number:</strong> <?php echo $row['floor_no']; ?></div>
        <div class="record-detail"><strong>Number of Flats:</strong> <?php echo $row['no_of_flate']; ?></div>
        <div class="record-detail"><strong>Created By:</strong> <?php echo $row['created_by']; ?></div>
        <div class="record-detail"><strong>Updated By:</strong> <?php echo $row['updatedBy']; ?></div>
        <div class="record-detail"><strong>Created At:</strong> <?php echo $row['created_at']; ?></div>
        <div class="record-detail"><strong>Updated At:</strong> <?php echo $row['updated_at']; ?></div>
        <a href="process_form.php" class="btn btn-primary">Back to Manage Records</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
