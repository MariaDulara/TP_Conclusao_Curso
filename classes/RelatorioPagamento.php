<?php
class RelatorioPagamento {
    public $idRelatorio;
    public $departamento;
    public $mes;
    public $ano;
    public $holerites;

    public static function gerar($departamento, $mes, $ano) {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        $stmt = $conn->prepare("SELECT * FROM Holerite 
                                INNER JOIN Professor ON Holerite.idProfessor = Professor.idProfessor 
                                WHERE Professor.departamento = :departamento AND Holerite.mes = :mes AND Holerite.ano = :ano");
        $stmt->bindValue(':departamento', $departamento, SQLITE3_TEXT);
        $stmt->bindValue(':mes', $mes, SQLITE3_INTEGER);
        $stmt->bindValue(':ano', $ano, SQLITE3_INTEGER);
        $result = $stmt->execute();
        
        $holerites = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $holerite = new Holerite();
            $holerite->idHolerite = $row['idHolerite'];
            $holerite->idProfessor = $row['idProfessor'];
            $holerite->idFolhaPagamento = $row['idFolhaPagamento'];
            $holerite->mes = $row['mes'];
            $holerite->ano = $row['ano'];
            $holerite->salarioBase = $row['salarioBase'];
            $holerite->beneficios = $row['beneficios'];
            $holerite->descontos = $row['descontos'];
            $holerite->salarioLiquido = $row['salarioLiquido'];
            $holerites[] = $holerite;
        }
        
        $relatorio = new RelatorioPagamento();
        $relatorio->departamento = $departamento;
        $relatorio->mes = $mes;
        $relatorio->ano = $ano;
        $relatorio->holerites = $holerites;
        return $relatorio;
    }
}
?>
