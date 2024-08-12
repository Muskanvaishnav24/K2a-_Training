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

$sql = "SELECT stu_id,name, dob,class FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> stu_id: " . $row["stu_id"]. " - Name: " . $row["name"]. "  -dob: " .$row["dob"]. "-class:" .$row["class"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>