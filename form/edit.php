<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Record</title>
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
  <h2>Edit Record</h2>

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

  $row = null;

  if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch the current record data
    $sql_select = "SELECT id, soc_id, wing_name, floor_no, no_of_flate, created_by, updatedBy, created_at, updated_at FROM tbl_wings_flate_settings WHERE id = ?";
    $stmt = $conn->prepare($sql_select);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
    } else {
      echo '<div class="alert alert-danger" role="alert">
              No record found for the provided ID.
            </div>';
      exit();
    }
  }

  // Update the record if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST['id'];
    $soc_id = $_POST['soc_id'];
    $wing_name = $_POST['wing_name'];
    $floor_no = $_POST['floor_no'] ?? null;
    $no_of_flate = $_POST['no_of_flate'];
    $created_by = $_POST['created_by'] ?? null;
    $updatedBy = $_POST['updatedBy'] ?? null;
    $created_at = $_POST['created_at'] ?? null;
    $updated_at = $_POST['updated_at'] ?? null;

    // Update statement
    $sql_update = "UPDATE tbl_wings_flate_settings SET soc_id=?, wing_name=?, floor_no=?, no_of_flate=?, created_by=?, updatedBy=?, created_at=?, updated_at=? WHERE id=?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("isiiisssi", $soc_id, $wing_name, $floor_no, $no_of_flate, $created_by, $updatedBy, $created_at, $updated_at, $id);

    if ($stmt->execute()) {
      echo '<div class="alert alert-success" role="alert">
              Record updated successfully.
            </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">
              Error updating record: ' . $conn->error . '
            </div>';
    }

    // Re-fetch the updated data
    $sql_select = "SELECT id, soc_id, wing_name, floor_no, no_of_flate, created_by, updatedBy, created_at, updated_at FROM tbl_wings_flate_settings WHERE id = ?";
    $stmt = $conn->prepare($sql_select);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
    }
  }

  $conn->close();
  ?>

  <?php if ($row): ?>
  <form method="post" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="form-group">
      <label for="soc_id">Society ID:</label>
      <input type="number" class="form-control" id="soc_id" name="soc_id" value="<?php echo $row['soc_id']; ?>" required>
    </div>
    <div class="form-group">
      <label for="wing_name">Wing Name:</label>
      <input type="text" class="form-control" id="wing_name" name="wing_name" value="<?php echo $row['wing_name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="floor_no">Floor Number:</label>
      <input type="number" class="form-control" id="floor_no" name="floor_no" value="<?php echo $row['floor_no']; ?>">
    </div>
    <div class="form-group">
      <label for="no_of_flate">Number of Flats:</label>
      <input type="number" class="form-control" id="no_of_flate" name="no_of_flate" value="<?php echo $row['no_of_flate']; ?>" required>
    </div>
    <div class="form-group">
      <label for="created_by">Created By:</label>
      <input type="number" class="form-control" id="created_by" name="created_by" value="<?php echo $row['created_by']; ?>">
    </div>
    <div class="form-group">
      <label for="updatedBy">Updated By:</label>
      <input type="number" class="form-control" id="updatedBy" name="updatedBy" value="<?php echo $row['updatedBy']; ?>">
    </div>
    <div class="form-group">
      <label for="created_at">Created At:</label>
      <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="<?php echo date('Y-m-d\TH:i', strtotime($row['created_at'])); ?>">
    </div>
    <div class="form-group">
      <label for="updated_at">Updated At:</label>
      <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d\TH:i', strtotime($row['updated_at'])); ?>">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Update Record</button>
  </form>
  <?php endif; ?>
</div>

<!-- Bootstrap JS and dependencies (optional if needed for other functionalities) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
