<?php
    include '../classes/RelatorioPagamento.php';

    $departamento = $_POST['departamento'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    $relatorio = RelatorioPagamento::gerar($departamento, $mes, $ano);

    echo "<h2>Relatório de Pagamento de $departamento - $mes/$ano</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Professor</th><th>Salário Base</th><th>Benefícios</th><th>Descontos</th><th>Salário Líquido</th></tr>";

    foreach ($relatorio->holerites as $holerite) {
        echo "<tr>";
        echo "<td>{$holerite->getProfessorNome()}</td>";
        echo "<td>{$holerite->salarioBase}</td>";
        echo "<td>{$holerite->beneficios}</td>";
        echo "<td>{$holerite->descontos}</td>";
        echo "<td>{$holerite->salarioLiquido}</td>";
        echo "</tr>";
    }

    echo "</table>";
?>
