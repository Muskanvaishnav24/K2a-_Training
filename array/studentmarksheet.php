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
<?php
if (isset($_POST['submit'])) {
    $roll_no = $_POST['roll_no'];
    $name = $_POST['name'];
    $maths = $_POST['maths'];
    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $english = $_POST['english'];
    $computer = $_POST['computer'];

    $total = $maths + $physics + $chemistry + $english + $computer;
    $percentage = $total / 5;
?>

<h2>Marksheet</h2>
<table>
    <tr>
        <th>Roll Number</th>
        <td><?php echo $roll_no; ?></td>
    </tr>
    <tr>
        <th>Name</th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th>Maths</th>
        <td><?php echo $maths; ?></td>
    </tr>
    <tr>
        <th>Physics</th>
        <td><?php echo $physics; ?></td>
    </tr>
    <tr>
        <th>Chemistry</th>
        <td><?php echo $chemistry; ?></td>
    </tr>
    <tr>
        <th>English</th>
        <td><?php echo $english; ?></td>
    </tr>
    <tr>
        <th>Computer</th>
        <td><?php echo $computer; ?></td>
    </tr>
    <tr>
        <th>Total</th>
        <td><?php echo $total; ?></td>
    </tr>
    <tr>
        <th>Percentage</th>
        <td><?php echo $percentage . '%'; ?></td>
    </tr>
</table>

<?php
}
?>

</body>
</html>
