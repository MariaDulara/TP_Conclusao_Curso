<?php
include_once '../classes/Usuario.php'; 
include_once '../classes/Professor.php'; 
include_once '../classes/DetalhesSalario.php'; 

$nome = $_POST['nome'];
$email = $_POST['email'];
$departamento = $_POST['departamento'];
$salarioBase = $_POST['salario_base'];
$beneficios = $_POST['beneficios'];
$descontos = $_POST['descontos'];

$usuarioExistente = Usuario::findByEmail($email);

if ($usuarioExistente) {
    echo "Erro ao cadastrar o professor: E-mail já cadastrado.";
    exit; 
}

$usuario = new Usuario($nome, $email, $senha=null, 'Professor');

try {
    $usuario->save();
    $idUsuario = $usuario->idUsuario;


    $detalhesSalario = new DetalhesSalario(null, $salarioBase, $beneficios, $descontos);

    $professor = new Professor($idUsuario, $departamento, $detalhesSalario);
    
    $professor->save();

    echo "Professor cadastrado com sucesso!";
} catch (Exception $e) {
    echo "Erro ao cadastrar o professor: " . $e->getMessage();
}
?>
