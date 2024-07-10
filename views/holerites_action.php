<?php
    include '../classes/Holerite.php';

    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    $holerites = Holerite::getByMesAno($mes, $ano);

    echo "<h2>Holerites de $mes/$ano</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Professor</th><th>Salário Base</th><th>Benefícios</th><th>Descontos</th><th>Salário Líquido</th></tr>";

    foreach ($holerites as $holerite) {
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
