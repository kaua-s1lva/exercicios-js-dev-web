<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 05</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table tr th {
            padding: 8px;
            border: 1px solid black;
            
        }

        table tr td {
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Fahrenheit</th>
            <th>Celsius</th>
        </tr>
        <?php 
            $c = 0;
            $f = -2;

            while ($c < 60) {
                
                $f += 2;

                $c = ($f - 30)/2;

                echo "<tr>";

                echo "<td>$f</td>";
                echo "<td>$c</td>";

                echo "</tr>";
            }

            
        ?>
    </table>
</body>
</html>