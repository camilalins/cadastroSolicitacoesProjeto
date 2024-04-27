<?php error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    include_once "../repo/SolicitacaoRepositorio.php";
    function index(){
        //obter dados - não precisa
        //tomar decisões /executar algo específico - não precisa
        //devolver dados para view
        include "../views/solicitacoes/cadastro.php";

    }
    function post(){
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
        }
        catch (Exception $e) {
            // Em caso de exceção, defina a mensagem de erro com a mensagem da exceção
            $erro = $e->getMessage();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") index();
    if ($_SERVER["REQUEST_METHOD"] == "POST") post();


