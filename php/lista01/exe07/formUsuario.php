<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Usuário</title>
</head>
<body>
    <form action="processaUsuario.php" method="post">
        <h1>Formulário de Cadastro de Usuário</h1>
        Nome: <input type="text" name="nome" id="nome"> <p></p>
        Login: <input type="text" name="login" id="login"> <p></p>
        Senha: <input type="password" name="senha" id="senha"> <p></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>