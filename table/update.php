<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Wing Settings</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .title {
        text-align: center;
        margin-bottom: 20px;
    }
</style>
</head>
<body>

<div class="container">
    <h2 class="title">Update Wing Settings</h2>

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

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $soc_id = $_POST["soc_id"];
        $wing_name = $_POST["wing_name"];
        $no_of_floors = $_POST["no_of_floors"];
        $created_by = $_POST["created_by"];
        $updatedBy = $_POST["updatedBy"];
        $created_at = $_POST["created_at"];
        $updated_at = $_POST["updated_at"];

        // Update the record
        $sql = "UPDATE tbl_wings_settings SET soc_id='$soc_id', wing_name='$wing_name', no_of_floors='$no_of_floors', created_by='$created_by', updatedBy='$updatedBy', created_at='$created_at', updated_at='$updated_at' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Record updated successfully</div>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Check if id is passed in the URL
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        // SQL to fetch the record
        $sql = "SELECT id, soc_id, wing_name, no_of_floors, created_by, updatedBy, created_at, updated_at FROM tbl_wings_settings WHERE id='$id'";

        // Execute query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the selected row
            $row = $result->fetch_assoc();
        } else {
            echo "No results found for the specified ID.";
            exit;
        }
    } else {
        echo "No ID specified.";
        exit;
    }

    // Close connection
    $conn->close();
    ?>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="soc_id">Soc ID:</label>
            <input type="text" class="form-control" id="soc_id" name="soc_id" value="<?php echo htmlspecialchars($row['soc_id']); ?>" required>
        </div>
        <div class="form-group">
            <label for="wing_name">Wing Name:</label>
            <input type="text" class="form-control" id="wing_name" name="wing_name" value="<?php echo htmlspecialchars($row['wing_name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="no_of_floors">No. of Floors:</label>
            <input type="number" class="form-control" id="no_of_floors" name="no_of_floors" value="<?php echo htmlspecialchars($row['no_of_floors']); ?>" required>
        </div>
        <div class="form-group">
            <label for="created_by">Created By:</label>
            <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo htmlspecialchars($row['created_by']); ?>" required>
        </div>
        <div class="form-group">
            <label for="updatedBy">Updated By:</label>
            <input type="text" class="form-control" id="updatedBy" name="updatedBy" value="<?php echo htmlspecialchars($row['updatedBy']); ?>" required>
        </div>
        <div class="form-group">
            <label for="created_at">Created At:</label>
            <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="<?php echo date('Y-m-d\TH:i', strtotime($row['created_at'])); ?>" required>
        </div>
        <div class="form-group">
            <label for="updated_at">Updated At:</label>
            <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d\TH:i', strtotime($row['updated_at'])); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

</body>
</html>
