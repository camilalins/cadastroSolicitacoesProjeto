<?php
require_once "../config/env.php";
class UserRepositorio {
    private $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASS"], $_ENV["MYSQL_DATABASE"], $_ENV["MYSQL_PORT"]);
        if ($this->mysqli->connect_error) {
            die('Não foi possível conectar: ' . $this->mysqli->connect_error);
        }
    }

    // Função para verificar as credenciais de login
    public function verifyLogin($email, $password) {
        $email = $this->mysqli->real_escape_string($email);
        $password = $this->mysqli->real_escape_string($password);

        $query = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$password'";
        $result = $this->mysqli->query($query);

        if ($result && $result->num_rows == 1) {
            return $result->fetch_assoc();
        }
        return false;
    }


    // Outras funções do modelo aqui...
}

?>
