<?php
// Check if ID parameter is provided in the URL
if (!isset($_GET['id'])) {
    die("ID parameter is missing");
}

$id = $_GET['id'];

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

// Fetch record based on ID
$sql = "SELECT id, soc_id, wing_name, floor_no, no_of_flate, created_by, updatedBy, created_at, updated_at
        FROM tbl_wings_flate_settings
        WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Retrieve data
        $id = $row['id'];
        $soc_id = $row['soc_id'];
        $wing_name = $row['wing_name'];
        $floor_no = $row['floor_no'];
        $no_of_flate = $row['no_of_flate'];
        $created_by = $row['created_by'];
        $updatedBy = $row['updatedBy'];
        $created_at = $row['created_at'];
        $updated_at = $row['updated_at'];
    } else {
        echo "No record found";
        exit;
    }
} else {
    echo "Error fetching record: " . $conn->error;
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Update Record</h2>
        <form action="process_form.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="soc_id">Society ID:</label>
                <input type="text" class="form-control" id="soc_id" name="soc_id" value="<?php echo htmlspecialchars($soc_id); ?>">
            </div>
            <div class="form-group">
                <label for="wing_name">Wing Name:</label>
                <input type="text" class="form-control" id="wing_name" name="wing_name" value="<?php echo htmlspecialchars($wing_name); ?>">
            </div>
            <div class="form-group">
                <label for="floor_no">Floor Number:</label>
                <input type="number" class="form-control" id="floor_no" name="floor_no" value="<?php echo $floor_no; ?>">
            </div>
            <div class="form-group">
                <label for="no_of_flate">Number of Flats:</label>
                <input type="number" class="form-control" id="no_of_flate" name="no_of_flate" value="<?php echo $no_of_flate; ?>">
            </div>
            <div class="form-group">
                <label for="created_by">Created By:</label>
                <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo htmlspecialchars($created_by); ?>">
            </div>
            <div class="form-group">
                <label for="updatedBy">Updated By:</label>
                <input type="text" class="form-control" id="updatedBy" name="updatedBy" value="<?php echo htmlspecialchars($updatedBy); ?>">
            </div>
            <div class="form-group">
                <label for="created_at">Created At:</label>
                <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo htmlspecialchars($created_at); ?>">
            </div>
            <div class="form-group">
                <label for="updated_at">Updated At:</label>
                <input type="text" class="form-control" id="updated_at" name="updated_at" value="<?php echo htmlspecialchars($updated_at); ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Update Record</button>
            <a href="index.html" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
