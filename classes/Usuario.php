<?php
class Usuario {
    public $idUsuario;
    public $nome;
    public $email;
    public $senha;
    public $papel;

    public function __construct($nome = null, $email = null, $senha = null, $papel = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->papel = $papel;
    }

    public static function login($email, $senha) {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        $stmt = $conn->prepare("SELECT * FROM Usuario WHERE email = :email");
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $result = $stmt->execute();
        $usuario = $result->fetchArray(SQLITE3_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $user = new Usuario();
            $user->idUsuario = $usuario['idUsuario'];
            $user->nome = $usuario['nome'];
            $user->email = $usuario['email'];
            $user->senha = $usuario['senha'];
            $user->papel = $usuario['papel'];
            return $user;
        } else {
            return false;
        }
    }

    public function save() {
        $conn = new SQLite3('../database/FolhaDePagamento.db');
        if ($this->idUsuario) {
            $stmt = $conn->prepare("UPDATE Usuario SET nome = :nome, email = :email, senha = :senha, papel = :papel WHERE idUsuario = :idUsuario");
            $stmt->bindValue(':idUsuario', $this->idUsuario, SQLITE3_INTEGER);
        } else {
            $stmt = $conn->prepare("INSERT INTO Usuario (nome, email, senha, papel) VALUES (:nome, :email, :senha, :papel)");
        }
        $stmt->bindValue(':nome', $this->nome, SQLITE3_TEXT);
        $stmt->bindValue(':email', $this->email, SQLITE3_TEXT);
        $stmt->bindValue(':senha', password_hash($this->senha, PASSWORD_BCRYPT), SQLITE3_TEXT);
        $stmt->bindValue(':papel', $this->papel, SQLITE3_TEXT);
        $stmt->execute();
    }
}
?>
