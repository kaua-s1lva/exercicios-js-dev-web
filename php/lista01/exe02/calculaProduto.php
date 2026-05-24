<?php
    $produtos = ['1001' => 5.32, '1324' => 6.45, '6548' => 2.37, '0987' => 5.32, '7623' => 6.45];

    $idProduto = $_REQUEST['idProduto'];
    $qtde = $_REQUEST['qtde'];
    $valorTotal = 0;

    foreach($produtos as $id => $preco) {
        if ($idProduto == $id) $valorTotal = $preco * $qtde;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O valor total é <?= $valorTotal ?></h1>
</body>
</html>