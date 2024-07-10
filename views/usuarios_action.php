<?php
session_start();
include '../classes/Usuario.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$usuario = Usuario::login($login, $senha);

if ($usuario) {
    $_SESSION['user_id'] = $usuario->idUsuario;
    header('Location: ../index.php');
} else {
    echo "Credenciais inválidas";
}
?>

