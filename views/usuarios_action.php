<?php
    include '../classes/Usuario.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $papel = $_POST['papel'];

    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = password_hash($senha, PASSWORD_BCRYPT);
    $usuario->papel = $papel;
    $usuario->save();

    header('Location: usuarios.php');
?>
