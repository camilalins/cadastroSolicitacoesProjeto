<?php

require_once "../repo/SolicitacaoRepositorio.php";

$repo = new SolicitacaoRepositorio();
$solicitacoes = $repo->obterTodos();

include "../index.php";
