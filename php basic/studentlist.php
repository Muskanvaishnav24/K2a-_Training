<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Records</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Optional CSS for custom styling */
    body {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Student Records</h2>

  <!-- PHP Code to Handle Database Connection and Data Retrieval -->
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "school";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if form submitted and insert data into database


  // Fetch all records from the student table
  $sql_select = "SELECT stu_id, name, dob, class FROM student ORDER BY stu_id DESC"; // Latest on top
  $result = $conn->query($sql_select);

  if ($result->num_rows > 0) {
    // Display records in a Bootstrap table
    echo '<table class="table table-striped">
            <thead>
              <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Class</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
    while($row = $result->fetch_assoc()) {
      echo '<tr>
              <td>' . $row["stu_id"] . '</td>
              <td>' . $row["name"] . '</td>
              <td>' . $row["dob"] . '</td>
              <td>' . $row["class"] . '</td>
              <td>
                <a href="view.php?id=' . $row["stu_id"] . '" class="btn btn-info btn-sm">View</a>
                <a href="edit.php?id=' . $row["stu_id"] . '" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=' . $row["stu_id"] . '" class="btn btn-danger btn-sm">Delete</a>
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
