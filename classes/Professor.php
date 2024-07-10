<?php
include '../classes/Usuario.php';
class Professor extends Usuario {
      public $idProfessor;
      public $departamento;
      public $detalhesSalario;
  
      public function __construct($idUsuario=null, $nome=null, $email=null, $senha=null, $idProfessor=null, $departamento=null, $detalhesSalario=null) {
          parent::__construct($idUsuario, $nome, $email, $senha, 'Professor');
          $this->idProfessor = $idProfessor;
          $this->departamento = $departamento;
          $this->detalhesSalario = $detalhesSalario;
      }
  
      public function visualizarHolerite($mes, $ano) {
          
      }
  
      public function solicitarLicenca($dataInicio, $dataFim) {
          
      }

      public function save() {
        $conn = new SQLite3('../database/FolhaDePagamento.db');

        if ($this->idProfessor) {
            $stmt = $conn->prepare("UPDATE Professor SET idUsuario = :idUsuario, departamento = :departamento WHERE idProfessor = :idProfessor");
            $stmt->bindValue(':idProfessor', $this->idProfessor, SQLITE3_INTEGER);
        } else {
            $stmt = $conn->prepare("INSERT INTO Professor (idUsuario, departamento) VALUES (:idUsuario, :departamento)");
        }

        $stmt->bindValue(':idUsuario', $this->idUsuario, SQLITE3_INTEGER);
        $stmt->bindValue(':departamento', $this->departamento, SQLITE3_TEXT);
        
        $stmt->execute();
    }
  }  
?>