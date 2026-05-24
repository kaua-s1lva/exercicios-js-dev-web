<?php
    $valor = 28000;
    $taxa = 4000;
    $anos = 7;

    for ($i=1; $i<=$anos; $i++) {

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
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
            <th>Ano</th>
            <th>Depreciação</th>
            <th>Valor no Fim do Ano</th>
            <th>Depreciação Acumulada</th>
        </tr>
        <?php 
            for ($i=1; $i<=$anos; $i++) {
                echo "<tr>";

                $valorFAno = $valor - ($i * $taxa);
                $depreciacao = ($i * $taxa);

                echo "<td>$i</td>";
                echo "<td>$taxa</td>";
                echo "<td>$valorFAno</td>";
                echo "<td>$depreciacao</td>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>