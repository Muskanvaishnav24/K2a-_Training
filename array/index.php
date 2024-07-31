<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
    <h1>Generate Marksheet</h1>
    <form method="post" action="submit.php">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="rollno">Roll No.:</label>
            <input type="text" id="rollno" name="rollno" required>
        </div>
        <div>
        <label for="class">Class :</label>
            <select id="class" name="class" required>
                <option value="">--Please choose an option--</option>
                <option value="1">Class 9</option>
                <option value="2">Class 10</option>
                <option value="3">Class 11</option>
                <option value="4">Class 12</option>
</select>
</div>
        <div>
            <label for="subject1">Subject 1:</label>
            <input type="text" id="subject1" name="subjects[]" required>
            <label for="marks1">Marks:</label>
            <input type="number" id="marks1" name="marks[]" required>
        </div>
        <div>
            <label for="subject2">Subject 2:</label>
            <input type="text" id="subject2" name="subjects[]" required>
            <label for="marks2">Marks:</label>
            <input type="number" id="marks2" name="marks[]" required>
        </div>
        <div>
            <label for="subject3">Subject 3:</label>
            <input type="text" id="subject3" name="subjects[]" required>
            <label for="marks3">Marks:</label>
            <input type="number" id="marks3" name="marks[]" required>
        </div>
        <div>
            <label for="subject4">Subject 4:</label>
            <input type="text" id="subject4" name="subjects[]" required>
            <label for="marks4">Marks:</label>
            <input type="number" id="marks4" name="marks[]" required>
        </div>
        <div>
            <label for="subject5">Subject 5:</label>
            <input type="text" id="subject5" name="subjects[]" required>
            <label for="marks5">Marks:</label>
            <input type="number" id="marks5" name="marks[]" required>
        </div>
        <input type="submit" value="Generate Marksheet">
    </form>
</div>

</body>
</html>
