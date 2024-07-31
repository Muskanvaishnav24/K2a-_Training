<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Records</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Optional custom styles */
        body {
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        
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

        // Fetch all records from the database
        $sql = "SELECT id, soc_id, wing_name, floor_no, no_of_flate, created_by, updatedBy, created_at, updated_at FROM tbl_wings_flate_settings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // Display records in a Bootstrap table
     echo '<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Society ID</th>
                            <th>Wing Name</th>
                            <th>Floor Number</th>
                            <th>Number of Flats</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["soc_id"].'</td>
                        <td>'.$row["wing_name"].'</td>
                        <td>'.$row["floor_no"].'</td>
                        <td>'.$row["no_of_flate"].'</td>
                        <td>'.$row["created_by"].'</td>
                        <td>'.$row["updatedBy"].'</td>
                        <td>'.$row["created_at"].'</td>
                        <td>'.$row["updated_at"].'</td>
                        <td>
                           <a href="view.php?id=' . $row["id"] . '" class="btn btn-info btn-sm">View</a>
                <a href="edit.php?id=' . $row["id"] . '" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">Delete<a>
              
            
                                
                            
                        </td>
                    </tr>';
            
           }
    echo '</tbody>
          </table>';
  } else {
    echo '<div class="alert alert-info" role="alert">
            No records found
          </div>';
  }

  $conn->close();
  ?>

</div>

<!-- Bootstrap JS and dependencies (optional if needed for other functionalities) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>

