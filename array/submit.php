<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            border-bottom: 3px solid #007bff; /* Bottom border added here */
            padding-bottom: 10px; /* Add padding to ensure text does not touch the border */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 18px;
            
        }
        th, td {
            padding: 12px;
            text-align:center;
            border: 2px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
            color: #555;
            text-align:center;
        }
        .subject {
            color: #2a9d8f;
        }
        .marks {
            color: #e76f51;
        }
        .total, .percentage {
            font-weight: bold;
            background-color: #f0f0f0;
        }
        .total td, .percentage td {
            border-top: 2px solid #333;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve user input
        $name = htmlspecialchars($_POST['name']);
        $rollno = htmlspecialchars($_POST['rollno']);
        $subjects = $_POST['subjects'];
        $marks = $_POST['marks'];

        // Validate input
        if (count($subjects) == count($marks)) {
            $totalMarks = 0;
            $totalSubjects = count($subjects);

            echo "<h1>Marksheet</h1>";
            echo "<h2 style='font-size: 15px;'>Name:$name</h2>";  // Adjusted font size for name
            
            echo "<h3 style='font-size: 15px;'>Roll No.:$rollno</h3>";  // Adjusted font size for roll number
            echo "<h3> Class:$class</h3>";
            echo "<table>";
            echo "<tr><th>Subject</th><th>Marks</th></tr>";

            for ($i = 0; $i < $totalSubjects; $i++) {
                $subject = htmlspecialchars($subjects[$i]);
                $mark = intval($marks[$i]);
                $totalMarks += $mark;
                echo "<tr><td class='subject'>$subject</td><td class='marks'>$mark</td></tr>";
            }

            $percentage = $totalMarks / $totalSubjects;

            echo "<tr class='total'><td>Total</td><td class='marks'>$totalMarks</td></tr>";
            echo "<tr class='percentage'><td>Percentage</td><td class='marks'>" . number_format($percentage, 2) . "%</td></tr>";
            echo "</table>";
        } else {
            echo "<p>Please enter the same number of subjects and marks.</p>";
        }
    } else {
        echo "<p>No data received. Please submit the form.</p>";
    }
    ?>
</div>

</body>
</html>
