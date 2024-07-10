<?php
class Usuario {
      protected $idUsuario;
      protected $nome;
      protected $email;
      protected $senha;
      protected $papel;
  
      public function __construct($idUsuario, $nome, $email, $senha, $papel) {
          $this->idUsuario = $idUsuario;
          $this->nome = $nome;
          $this->email = $email;
          $this->senha = $senha;
          $this->papel = $papel;
      }
  
      public function entrar() {
          
      }
  
      public function sair() {
          
      }
  
      public function redefinirSenha() {
          
      }
  }  

?>