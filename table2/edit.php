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

// Initialize variables
$id = $soc_id = $wing_name = $floor_no = $no_of_flate = $created_by = $updatedBy = $created_at = $updated_at = "";

// Check if 'id' is set in the query string and form is not submitted
if (isset($_GET['id']) && $_SERVER['REQUEST_METHOD'] != 'POST') {
    $id = $_GET['id'];

    // SQL query to fetch the specific record
    $sql = "SELECT * FROM tbl_wings_flate_settings WHERE id = $id";
    $result = $conn->query($sql);

    // Check if record is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $soc_id = $row['soc_id'];
        $wing_name = $row['wing_name'];
        $floor_no = $row['floor_no'];
        $no_of_flate = $row['no_of_flate'];
        $created_by = $row['created_by'];
        $updatedBy = $row['updatedBy'];
        $created_at = $row['created_at'];
        $updated_at = $row['updated_at'];
    } else {
        echo "No record found.";
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process form submission
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
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wing Flat Settings</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Wing Flat Settings</h1>
    <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="soc_id">Soc ID</label>
            <input type="text" class="form-control" id="soc_id" name="soc_id" value="<?php echo $soc_id; ?>" required>
        </div>
        <div class="form-group">
            <label for="wing_name">Wing Name</label>
            <input type="text" class="form-control" id="wing_name" name="wing_name" value="<?php echo $wing_name; ?>" required>
        </div>
        <div class="form-group">
            <label for="floor_no">Floor No</label>
            <input type="text" class="form-control" id="floor_no" name="floor_no" value="<?php echo $floor_no; ?>">
        </div>
        <div class="form-group">
            <label for="no_of_flate">No of Flats</label>
            <input type="text" class="form-control" id="no_of_flate" name="no_of_flate" value="<?php echo $no_of_flate; ?>" required>
        </div>
        <div class="form-group">
            <label for="created_by">Created By</label>
            <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $created_by; ?>">
        </div>
        <div class="form-group">
            <label for="updatedBy">Updated By</label>
            <input type="text" class="form-control" id="updatedBy" name="updatedBy" value="<?php echo $updatedBy; ?>">
        </div>
        <div class="form-group">
            <label for="created_at">Created At</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $created_at; ?>">
        </div>
        <div class="form-group">
            <label for="updated_at">Updated At</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="<?php echo $updated_at; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery
