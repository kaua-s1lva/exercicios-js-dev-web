<?php
    include "Usuario.inc.php";

    $nome = $_REQUEST['nome'];
    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];

    $usuario = new Usuario($nome, $login, $senha);

    if ($usuario->validarLogin($login) && $usuario->validarSenha($senha)) {
        session_start();
    
        $_SESSION['usuario'] = $usuario;
    
        header("Location: CadastroSucesso.php");
    } else {
        echo "Erro ao cadastrar usuário";
    }

?>