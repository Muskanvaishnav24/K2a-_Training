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

// Check if 'id' is set in the query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to fetch the specific record
    $sql = "SELECT * FROM tbl_wings_flate_settings WHERE id = $id";
    $result = $conn->query($sql);

    // Check if record is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Wing Flat Settings</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">View Wing Flat Setting Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?php echo $row["id"]; ?></td>
        </tr>
        <tr>
            <th>Soc ID</th>
            <td><?php echo $row["soc_id"]; ?></td>
        </tr>
        <tr>
            <th>Wing Name</th>
            <td><?php echo $row["wing_name"]; ?></td>
        </tr>
        <tr>
            <th>Floor No</th>
            <td><?php echo $row["floor_no"]; ?></td>
        </tr>
        <tr>
            <th>No of Flats</th>
            <td><?php echo $row["no_of_flate"]; ?></td>
        </tr>
        <tr>
            <th>Created By</th>
            <td><?php echo $row["created_by"]; ?></td>
        </tr>
        <tr>
            <th>Updated By</th>
            <td><?php echo $row["updatedBy"]; ?></td>
        </tr>
        <tr>
            <th>Created At</th>
            <td><?php echo $row["created_at"]; ?></td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td><?php echo $row["updated_at"]; ?></td>
        </tr>
    </table>
    <a href="index.php" class="btn btn-secondary">Back to List</a>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
