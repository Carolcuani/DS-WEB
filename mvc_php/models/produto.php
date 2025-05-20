<?php

require './models/database.php';

class Produto {
    private $conexao;

    public function __construct() {
        $this->conexao = new Database;
    }

    public function queryOne($parameters) {
        $resultado = $this->conexao->executeQuery(
            "SELECT * FROM produtos WHERE idProduto = :idProduto", 
            $parameters
        );
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function queryAll() {
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos");
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function Cadastro($dados) {
        $erros = [];

        // Validação simples
        if (empty($dados['nome'])) {
            $erros[] = "O nome do produto é obrigatório.";
        }
        if (!is_numeric($dados['preco']) || $dados['preco'] <= 0) {
            $erros[] = "O preço deve ser um número positivo.";
        }
        if (!is_numeric($dados['quantidade']) || $dados['quantidade'] < 0) {
            $erros[] = "A quantidade deve ser um número não negativo.";
        }

        if (!empty($erros)) {
            return ['status' => false, 'erros' => $erros];
        }

        // Inserção no banco
        $sql = "INSERT INTO produtos (nome, preco, quantidade) 
                VALUES (:nome, :preco, :quantidade)";

        $params = [
            ':nome' => $dados['nome'],
            ':preco' => $dados['preco'],
            ':quantidade' => $dados['quantidade']
        ];

        $resultado = $this->conexao->executeQuery($sql, $params);

        if ($resultado) {
            return ['status' => true];
        } else {
            return ['status' => false, 'erros' => ['Erro ao cadastrar produto no banco.']];
        }
    }
}
