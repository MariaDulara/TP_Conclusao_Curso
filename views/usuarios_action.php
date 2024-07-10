<?php
session_start();
include '../classes/Usuario.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = Usuario::login($email, $senha);

if ($usuario) {
    $_SESSION['user_id'] = $usuario->idUsuario;
    header('Location: ../index.php');
} else {
    echo "Credenciais inválidas";
}
?>
