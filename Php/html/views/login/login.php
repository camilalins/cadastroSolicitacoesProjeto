<!DOCTYPE html>
<!-- login_view.php -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SCS - Login</title>
        <!-- Inclua o Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Inclua o Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <img src="../../repo/img/logoSolicitacao.png" alt="Sistema de Controle de Solicitações" width="250" height="50">
                        </div>
                        <div class="card-body">
                            <form method="post" action="../../login/login-controller.php">

                            <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="togglePassword"><i class="far fa-eye"></i></span>
                                        </div>
                                    </div>
                                    <!-- Se houver um erro, exibe a mensagem -->
                                    <div class="error"><?=$erro?></div>

                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                <a href="../../views/login/esqueceu-senha.php" id="forgotPasswordLink" class="float-right">Esqueci minha senha</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include __DIR__ . "/../../footer.php"; ?>


        <!-- Inclua o Bootstrap JS (opcional, mas necessário para alguns componentes interativos) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Inclua o arquivo de script personalizado -->
        <script src="login.js"></script>
    </body>
</html>
