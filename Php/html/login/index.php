<?php
require_once "../repo/UserRepositorio.php";

class LoginController {
    public function post() {
        $erro = ""; // Inicializa a variável $erro

        try {
            // OBTER DADOS
            $email = $_POST["email"];
            $password = $_POST["password"];

            // VALIDAÇÃO
            if (empty($email) || empty($password)) {
                // Se o e-mail ou a senha estiverem vazios, lance uma exceção
                throw new Exception("Os campos não podem estar vazios");
            } else {
                $userRepo = new UserRepositorio();

                // Verificação das credenciais
                $user = $userRepo->verifyLogin($email, $password);

                if ($user) {
                    // Login bem-sucedido, redireciona para a página principal
                    header("Location: ../solicitacoes/obter-todos.php");
                    exit();
                } else {
                    // Credenciais inválidas, defina a mensagem de erro
                    $erro = "Usuário e/ou senha inválidos";
                }
            }
        } catch (Exception $e) {
            // Em caso de exceção, defina a mensagem de erro com a mensagem da exceção
            $erro = $e->getMessage();
        }

        // Inclui a página de login com a mensagem de erro, se houver
        include "../views/login/login.php";
        echo '<link rel="stylesheet" href="../views/login/login.css">';
    }
}

$loginController = new LoginController();
$loginController->post();
?>
