<?php
require_once "../config/env.php";
class SolicitacaoRepositorio {
    private $mysqli;
    public function __construct() {
        $this->mysqli = new mysqli($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASS"], $_ENV["MYSQL_DATABASE"], $_ENV["MYSQL_PORT"]);
        if ($this->mysqli->connect_error) die('Não foi possível conectar: ' . $this->mysqli->connect_error);
    }
    public function obterTodos() {
        $result = $this->mysqli->query("SELECT * from solicitacao");
        while ($row = $result->fetch_object()) $solicitacoes[] = $row;
        $this->mysqli -> close();
        return $solicitacoes;
    }
    /**
     * Criar solicitacao
     * @throws Exception caso cliente ou placa vazios
     */
    public function criar($solicitacao) {
        if (!$solicitacao->data || !$solicitacao->cliente || !$solicitacao->placa)
            throw new Exception('Informe os dados obrigatórios');
        $sql = "INSERT INTO solicitacao (data, cliente, placa) VALUES (?, ?, ?)";
        $stmt = $this->mysqli->prepare($sql);
        if (!$stmt)
            throw new Exception('Erro na preparação da declaração: ' . $this->mysqli->error);
        $stmt->bind_param('sss', $solicitacao->data, $solicitacao->cliente, $solicitacao->placa);
        if (!$stmt->execute())
            throw new Exception('Erro na execução da declaração: ' . $stmt->error);
        $stmt->close();
        $this->mysqli->close();
        return true;
    }
}