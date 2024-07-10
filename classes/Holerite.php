<?php

class Holerite {
  private $idHolerite;
  private $idProfessor;
  private $mes;
  private $ano;
  private $salarioBase;
  private $beneficios;
  private $descontos;
  private $salarioLiquido;
  private $detalhesSalario;

  public function __construct($idHolerite, $idProfessor, $mes, $ano, $salarioBase, $beneficios, $descontos, $salarioLiquido, $detalhesSalario) {
      $this->idHolerite = $idHolerite;
      $this->idProfessor = $idProfessor;
      $this->mes = $mes;
      $this->ano = $ano;
      $this->salarioBase = $salarioBase;
      $this->beneficios = $beneficios;
      $this->descontos = $descontos;
      $this->salarioLiquido = $salarioLiquido;
      $this->detalhesSalario = $detalhesSalario;
  }

  public function gerarHolerite($idProfessor, $mes, $ano) {
      
  }

  public function obterDetalhesHolerite() {
      
  }
}

?>