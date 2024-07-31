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

// SQL query to fetch data from tbl_wings_flate_settings
$sql = "SELECT * FROM tbl_wings_flate_settings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wings Flat Settings</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Wings Flat Settings</h1>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Soc ID</th>
                <th>Wing Name</th>
                <th>Floor No</th>
                <th>No of Flats</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["soc_id"] . "</td>";
                echo "<td>" . $row["wing_name"] . "</td>";
                echo "<td>" . $row["floor_no"] . "</td>";
                echo "<td>" . $row["no_of_flate"] . "</td>";
                echo "<td>" . $row["created_by"] . "</td>";
                echo "<td>" . $row["updatedBy"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td>" . $row["updated_at"] . "</td>";
                echo "<td>";
                echo "<a href='view.php?id=" . $row["id"] . "' class='btn btn-info btn-sm'>View</a> ";
                echo "<a href='edit.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a> ";
                echo "<a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No records found</td></tr>";
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
