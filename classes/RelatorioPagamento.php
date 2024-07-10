<?php

class RelatorioPagamento {
  private $idRelatorio;
  private $mes;
  private $ano;
  private $departamento;
  private $listaHolerites;

  public function __construct($idRelatorio, $mes, $ano, $departamento, $listaHolerites) {
      $this->idRelatorio = $idRelatorio;
      $this->mes = $mes;
      $this->ano = $ano;
      $this->departamento = $departamento;
      $this->listaHolerites = $listaHolerites;
  }

  public function gerarRelatorio($departamento, $mes, $ano) {
      
  }

  public function obterDetalhesRelatorio() {
      
  }
}


?>