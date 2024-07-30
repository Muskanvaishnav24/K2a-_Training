<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        .chess-board {
            border-collapse: collapse;
        }
        .chess-board td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
        }
        .black {
            background-color: #000;
            color: #fff;
        }
        .white {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Chess Board</h1>
    <table class="chess-board">
        <?php
        // Generate the chess board
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                // Determine the color based on the row and column index
                $color = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td class=\"$color\"></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
