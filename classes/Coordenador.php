<?php
class Coordenador extends Usuario {
      private $idCoordenador;
      private $departamento;
  
      public function __construct($idUsuario, $nome, $email, $senha, $idCoordenador, $departamento) {
          parent::__construct($idUsuario, $nome, $email, $senha, 'Coordenador');
          $this->idCoordenador = $idCoordenador;
          $this->departamento = $departamento;
      }
  
      public function acessarRelatoriosPagamento($mes, $ano) {
          
      }
  }
  
?>