<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Solicitações</title>
        <style>.error {color: red;}.mensagem{color: green;}</style>

    </head>
    <body>
        <h1>Cadastro de Solicitação</h1>
        <form action="/solicitacoes/cadastro.php" method="POST">
            <div class="error"><?=$erro?></div><br/>
            <div class="mensagem"><?=$mensagem?></div><br/>

            <label for="cliente">Cliente:</label>
            <input type="text" id="cliente" name="cliente" value="<?=$solicitacao->cliente?>" required> <br>
            <label for="placa">Placa:</label><br>
            <input type="text" id="placa" name="placa" value="<?=$solicitacao->placa?>" required><br>
            <button type="submit">Salvar</button>

            <a href="/solicitacoes/obter-todos.php">Ir para solicitações</a>
        </form>
    </body>
</html>
