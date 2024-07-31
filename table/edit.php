<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Edit Record</h2>
    
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
    
    // Fetch record based on ID
    $sql = "SELECT id, soc_id, wing_name, no_of_floors, created_by, updatedBy FROM tbl_wings_settings WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
        $conn->close();
        exit;
    }
    
    // Close connection
    $conn->close();
    ?>
    
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <div class="form-group">
            <label for="soc_id">Soc ID:</label>
            <input type="text" class="form-control" id="soc_id" name="soc_id" value="<?php echo $row['soc_id']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="wing_name">Wing Name:</label>
            <input type="text" class="form-control" id="wing_name" name="wing_name" value="<?php echo $row['wing_name']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="no_of_floors">No. of Floors:</label>
            <input type="number" class="form-control" id="no_of_floors" name="no_of_floors" value="<?php echo $row['no_of_floors']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="created_by">Created By:</label>
            <input type="text" class="form-control" id="created_by" name="created_by" value="<?php echo $row['created_by']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="updatedBy">Updated By:</label>
            <input type="text" class="form-control" id="updatedBy" name="updatedBy" value="<?php echo $row['updatedBy']; ?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
