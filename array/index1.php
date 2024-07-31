<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Marksheet</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Marksheet</h2>

<form method="post" action="studentmarksheet.php">
    <label for="roll_no">Roll Number:</label><br>
    <input type="text" id="roll_no" name="roll_no" required><br><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="maths">Maths:</label><br>
    <input type="number" id="maths" name="maths" required><br><br>
    <label for="physics">Physics:</label><br>
    <input type="number" id="physics" name="physics" required><br><br>
    <label for="chemistry">Chemistry:</label><br>
    <input type="number" id="chemistry" name="chemistry" required><br><br>
    <label for="english">English:</label><br>
    <input type="number" id="english" name="english" required><br><br>
    <label for="computer">Computer:</label><br>
    <input type="number" id="computer" name="computer" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>



</body>
</html>
