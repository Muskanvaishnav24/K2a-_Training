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

// Check if ID parameter is set in URL
if (isset($_GET['id'])) {
  $stu_id = $_GET['id'];

  // Prepare SQL statement to fetch student record based on stu_id
  $sql_select = "SELECT stu_id, name, dob, class FROM student WHERE stu_id = $stu_id";
  $result = $conn->query($sql_select);

  if ($result->num_rows > 0) {
    // Output data of the selected student
    $row = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View Student Record</title>
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
      <h2>View Student Record</h2>
      <table class="table">
       
        <tr>
          <th>Name</th>
          <td><?php echo $row["name"]; ?></td>
        </tr>
        <tr>
          <th>Date of Birth</th>
          <td><?php echo $row["dob"]; ?></td>
        </tr>
        <tr>
          <th>Class</th>
          <td><?php echo $row["class"]; ?></td>
        </tr>
      </table>
      <a href="studentlist.php" class="btn btn-primary">Back</a>
    </div>
    
    <!-- Bootstrap JS and dependencies (optional if needed for other functionalities) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    </body>
    </html>
    <?php
  } else {
    echo "No student record found with ID: " . $stu_id;
  }
} else {
  echo "Student ID parameter is missing in URL";
}

$conn->close();
?>



