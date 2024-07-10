<?php
include '../classes/Professor.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $departamento = $_POST['departamento'];
    $salario_base = $_POST['salario_base'];
    $beneficios = $_POST['beneficios'];
    $descontos = $_POST['descontos'];

    $professor = new Professor();
    $professor->nome = $nome;
    $professor->email = $email;
    $professor->departamento = $departamento;
    $professor->salarioBase = $salario_base;
    $professor->beneficios = $beneficios;
    $professor->descontos = $descontos;
    $professor->save();

    header('Location: cadastro_professor.php');
?>
