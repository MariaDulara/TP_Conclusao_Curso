<?php
include_once 'DetalhesSalario.php'; 

class Professor extends Usuario {
    public $idProfessor;
    public $departamento;
    public $detalhesSalario; 

    public function __construct($nome = null, $email = null, $senha = null, $departamento = null, $detalhesSalario = null) {
        parent::__construct($nome, $email, $senha, 'Professor'); 
        $this->departamento = $departamento;
        $this->detalhesSalario = $detalhesSalario;
    }

    public function visualizarHolerite($mes, $ano) {
          
    }

    public function solicitarLicenca($dataInicio, $dataFim) {
        
    }

    public function save() {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        $conn->exec('BEGIN');

        try {
            if ($this->idProfessor) {
                $stmt = $conn->prepare("UPDATE Professor SET idUsuario = :idUsuario, departamento = :departamento WHERE idProfessor = :idProfessor");
                $stmt->bindValue(':idProfessor', $this->idProfessor, SQLITE3_INTEGER);
            } else {
                $stmt = $conn->prepare("INSERT INTO Professor (idUsuario, departamento) VALUES (:idUsuario, :departamento)");
            }

            $stmt->bindValue(':idUsuario', $this->idUsuario, SQLITE3_INTEGER);
            $stmt->bindValue(':departamento', $this->departamento, SQLITE3_TEXT);
            $stmt->execute();

            if (!$this->idProfessor) {
                $this->idProfessor = $conn->lastInsertRowID();
            }

            if ($this->detalhesSalario instanceof DetalhesSalario) {
                $this->detalhesSalario->idProfessor = $this->idProfessor;
                $this->detalhesSalario->save($conn);
            }


            $conn->exec('COMMIT');

        } catch (Exception $e) {
            $conn->exec('ROLLBACK');
            throw $e; 
        } finally {
            $conn->close();
        }
    }
}
?>
