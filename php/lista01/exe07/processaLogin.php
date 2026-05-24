<?php
    require_once "Usuario.inc.php";

    session_start();

    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];
    
    $usuario = $_SESSION['usuario'];
    $dataLogin = $usuario->getDataLogin()->format('Y-m-d H:i:s');

    if ($usuario->efetuarLogin($login, $senha)) {
        echo "Login efetuado com sucesso às $dataLogin";
        // header("Location: LoginSucesso.php");
    } else {
        echo "Login efetuado com falha às $dataLogin";
    }
?>