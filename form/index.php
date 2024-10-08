<!DOCTYPE html>
<html>
    <head> </head>
    <body>
        <form action="process.php" method="POST">
            Name:<input type="text" name="name"><br>
            Class:<input type="text" name="course"><br>
            Operation:<input type="radio"  name="operator" value="sum">additon
            <input type="radio"name="operator" value="mul">multiplication
            <input type="radio"name="operator" value="div">division<br>

            <input type="submit" value="Submit">
</form>
</body>
</html>
