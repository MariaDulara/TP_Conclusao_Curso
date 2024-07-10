<?php
class DetalhesSalario {
    public $idProfessor;
    public $salarioBase;
    public $beneficios;
    public $descontos;
    public $salarioLiquido;

    // Método para salvar os detalhes do salário
    public function save() {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        $stmt = $conn->prepare("INSERT OR REPLACE INTO DetalhesSalario (idProfessor, salarioBase, beneficios, descontos, salarioLiquido) 
                                VALUES (:idProfessor, :salarioBase, :beneficios, :descontos, :salarioLiquido)");
        $stmt->bindValue(':idProfessor', $this->idProfessor, SQLITE3_INTEGER);
        $stmt->bindValue(':salarioBase', $this->salarioBase, SQLITE3_REAL);
        $stmt->bindValue(':beneficios', $this->beneficios, SQLITE3_REAL);
        $stmt->bindValue(':descontos', $this->descontos, SQLITE3_REAL);
        $stmt->bindValue(':salarioLiquido', $this->salarioBase + $this->beneficios - $this->descontos, SQLITE3_REAL);
        $stmt->execute();
    }
}
?>
