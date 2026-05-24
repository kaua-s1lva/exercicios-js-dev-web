<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 04</title>
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
            <th>Pés</th>
            <th>Metros</th>
        </tr>
        <?php 
            for ($i=3; $i<=30; $i+=3) {
                echo "<tr>";

                // 1 metro = 3,25 pés
                // 1 pé ~= 0,3 metros
                $metros = $i * 0.3;

                echo "<td>$i</td>";
                echo "<td>$metros</td>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>