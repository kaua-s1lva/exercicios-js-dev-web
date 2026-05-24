<?php 
    $aluno = "Kauã";
    
    $notas = [7, 6, 8];
    $soma = 0;

    for ($i=0; $i<sizeof($notas); $i++) {
        $soma += $notas[$i];
    }

    // utilizar array_sum()

    $media = $soma / sizeof($notas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <h1><?= $aluno ?>, sua média final é <?= $media ?></h1>
    <h2>Você está <?php 
        if ($media <= 4) echo "Reprovado";
        else if ($media < 7) echo "Em Prova Final";
        else echo "Aprovado";
    ?></h2>
</body>
</html>