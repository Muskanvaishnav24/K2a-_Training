<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
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
            
         color: green;
            font-size: 28px;
            margin-bottom: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 18px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 2px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
            color: #555;
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
    <h1> SPU COLLEGE FALNA </h1>
    <h2>Marksheet</h2>
    <h3> Name : Muskan </h3>
    <h3> Roll No. : 232</h3>

    <table>
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <?php
        $marksheet = array("physics"=>90, "maths"=>95, "chemistry"=>96, "english"=>93, "computer"=>98);
        $totalMarks = 0;
        foreach($marksheet as $subject => $marks) {
            echo "<tr><td class='subject'>$subject</td><td class='marks'>$marks</td></tr>";
            $totalMarks += $marks;
        }
        $totalSubjects = count($marksheet);
        $percentage = $totalMarks / $totalSubjects;
        ?>
        <tr class="total">
            <td>Total</td>
            <td class="marks"><?php echo $totalMarks; ?></td>
        </tr>
        <tr class="percentage">
            <td>Percentage</td>
            <td class="marks"><?php echo number_format($percentage, 2); ?>%</td>
        </tr>
    </table>
</div>

</body>
</html>

