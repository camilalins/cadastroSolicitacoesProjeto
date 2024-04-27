<?php error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); /** @var TYPE_NAME $solicitacoes */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <h1>PHP2</h1>



    <form action="/solicitacoes/obter-todos.php" method="post">
        <button>Carregar</button>
    </form>
    <br />
    <a href="/solicitacoes/cadastro.php">Criar</a>
    <br />
    <br />
    <div id="result">
        <?php foreach ($solicitacoes as $s):?>
            <div style="border: 1px solid #ccc; width: 300px; padding: 10px; display: flex">
                <div style="width: 50px"><?=$s->id?></div>
                <div style="width: 150px"><?=$s->cliente?></div>
                <div style="width: 150px"><?=$s->placa?></div>
            </div>
        <?php endforeach;?>
    </div>

</body>
</html>
<script src="/public/index.js" type="module"></script>