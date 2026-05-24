<?php
    $idade = $_REQUEST['idade'];

    $pesoNormal = (($idade - 6) / 4.4) + (2.3 * ($idade - 6)) + 22;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do peso normal</title>
</head>
<body>
    <h1>O Peso normal da criança é: <?= number_format($pesoNormal, 2, ",") ?> kg</h1>
</body>
</html>