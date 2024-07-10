<?php
class Holerite {
    public $idHolerite;
    public $idProfessor;
    public $idFolhaPagamento;
    public $mes;
    public $ano;
    public $salarioBase;
    public $beneficios;
    public $descontos;
    public $salarioLiquido;

    public static function getByMesAno($mes, $ano) {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        $stmt = $conn->prepare("SELECT * FROM Holerite WHERE mes = :mes AND ano = :ano");
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
        return $holerites;
    }


    public function getProfessorNome() {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        $stmt = $conn->prepare("SELECT nome FROM Usuario WHERE idUsuario = (SELECT idUsuario FROM Professor WHERE idProfessor = :idProfessor)");
        $stmt->bindValue(':idProfessor', $this->idProfessor, SQLITE3_INTEGER);
        $result = $stmt->execute();
        $usuario = $result->fetchArray(SQLITE3_ASSOC);
        return $usuario['nome'];
    }
}
?>
