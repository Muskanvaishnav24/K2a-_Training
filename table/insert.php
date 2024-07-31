<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>tbl_wings_settings</title>
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
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table th, table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    table th {
        background-color: #f2f2f2;
    }
    .title {
        text-align: center;
        margin-bottom: 20px;
    }
</style>
</head>
<body>

<div class="container">
    <h2 class="title">tbl_wings_settings</h2>
    
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
    
    // SQL to fetch data
    $sql = "SELECT id, soc_id, wing_name, no_of_floors, created_by, updatedBy, created_at, updated_at FROM tbl_wings_settings";
    
    // Execute query
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Soc ID</th>
                        <th>Wing Name</th>
                        <th>No. of Floors</th>
                        <th>Created By</th>
                        <th>Updated By</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>';
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["id"] . '</td>
                    <td>' . $row["soc_id"] . '</td>
                    <td>' . $row["wing_name"] . '</td>
                    <td>' . $row["no_of_floors"] . '</td>
                    <td>' . $row["created_by"] . '</td>
                    <td>' . $row["updatedBy"] . '</td>
                    <td>' . $row["created_at"] . '</td>
                    <td>' . $row["updated_at"] . '</td>
                    <td>
                        <a href="edit.php?id=' . $row["id"] . '" class="btn btn-primary btn-sm">Edit</a>
                
                            <a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo "0 results";
    }
    
    // Close connection
    $conn->close();
    ?>

</div>

</body>
</html>
