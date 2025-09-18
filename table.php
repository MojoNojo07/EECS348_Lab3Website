<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $size = (int)$_GET['size'];
            echo "<div>Multiplication table of size $size:</div>";
            echo "<div><table>";
            echo "<tr>";
            for($i = 0; $i < $size + 1; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";
            for($row = 1; $row < $size + 1; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";
                for($column = 1; $column < $size + 1; $column++) {
                    $mult = $row * $column;
                    echo "<td>$mult</td>";
                }
            }
            echo "</table></div>";
        ?>
    </body>
</html>