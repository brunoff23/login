<?php
    session_start();
    include('conexao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE `user` = ? AND `password` = md5(?) ");

    $sql->execute(array($usuario, $senha));

    $row = count($sql->fetchAll());

    
    
    if($row == 1) {
        $_SESSION['usuario'] = $usuario;
        header('Location: painel.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
?>