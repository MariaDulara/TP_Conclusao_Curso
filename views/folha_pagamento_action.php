<?php
    include '../classes/FolhaPagamento.php';
    include '../classes/Holerite.php';
    include '../classes/Professor.php';

    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    $folhaPagamento = new FolhaPagamento();
    $folhaPagamento->mes = $mes;
    $folhaPagamento->ano = $ano;
    $folhaPagamento->save();

    $professores = Professor::getAll();

    foreach ($professores as $professor) {
        $holerite = new Holerite();
        $holerite->idProfessor = $professor->idProfessor;
        $holerite->idFolhaPagamento = $folhaPagamento->idFolhaPagamento;
        $holerite->mes = $mes;
        $holerite->ano = $ano;
        $holerite->salarioBase = $professor->salarioBase;
        $holerite->beneficios = $professor->beneficios;
        $holerite->descontos = $professor->descontos;
        $holerite->salarioLiquido = $professor->salarioBase + $professor->beneficios - $professor->descontos;
        $holerite->save();
    }

    header('Location: folha_pagamento.php');
?>
