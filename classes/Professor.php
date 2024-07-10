<?php
class Professor extends Usuario {
      private $idProfessor;
      private $departamento;
      private $detalhesSalario;
  
      public function __construct($idUsuario, $nome, $email, $senha, $idProfessor, $departamento, $detalhesSalario) {
          parent::__construct($idUsuario, $nome, $email, $senha, 'Professor');
          $this->idProfessor = $idProfessor;
          $this->departamento = $departamento;
          $this->detalhesSalario = $detalhesSalario;
      }
  
      public function visualizarHolerite($mes, $ano) {
          
      }
  
      public function solicitarLicenca($dataInicio, $dataFim) {
          
      }
  }  
?>