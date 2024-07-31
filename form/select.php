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

$sql = "SELECT id, soc_id, wing_name, floor_no, no_of_flate, created_by, updatedBy, created_at, updated_at FROM tbl_wings_flate_settings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br>id: " . $row["id"] . " - soc_id: " . $row["soc_id"] . " - wing_name: " . $row["wing_name"] . " - floor_no: " . $row["floor_no"] . " - no_of_flate: " . $row["no_of_flate"] . " - created_by: " . $row["created_by"] . " - updatedBy: " . $row["updatedBy"] . " - created_at: " . $row["created_at"] . " - updated_at: " . $row["updated_at"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
