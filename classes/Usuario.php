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
  
      public static function login($email, $senha) {
        $conn = new mysqli('localhost', 'username', 'password', 'FolhaDePagamento');
        $stmt = $conn->prepare("SELECT * FROM Usuario WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_object('Usuario');
        
        if ($usuario && password_verify($senha, $usuario->senha)) {
            return $usuario;
        } else {
            return false;
        }
    }
  
      public function sair() {
          
      }
  
      public function redefinirSenha() {
          
      }
  }  

?>