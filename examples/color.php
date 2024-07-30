<!DOCTYPE html>
<html>
<head>
    <title>Select a Color</title>
</head>
<body>
    <form method="post">
        <label for="color">Select a color:</label>
        <select name="color" id="color">
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
            <option value="Purple">Purple</option>
            <option value="Orange">Orange</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to display the selected color
    function displayColor($color) {
        echo "You selected the color: $color<br>";
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedColor = $_POST["color"];

        // Display the selected color using switch case
        switch ($selectedColor) {
            case "Red":
                displayColor("Red");
                break;

            case "Blue":
                displayColor("Blue");
                break;

            case "Green":
                displayColor("Green");
                break;

            case "Yellow":
                displayColor("Yellow");
                break;

            case "Purple":
                displayColor("Purple");
                break;

            case "Orange":
                displayColor("Orange");
                break;

            default:
                echo "Invalid color selected.";
        }
    }
    ?>
</body>
</html>
