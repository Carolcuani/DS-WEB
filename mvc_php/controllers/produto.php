<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_php/assets/css/style.css">
    <title>Scudttina MVC</title>
</head>
<body>
    <div>
        <ul>
        <li><a  href="/mvc_php/home">Home</a></li>
        <li><a class="active" href="/mvc_php/produto">Produtos</a></li>
        <li><a  href="/mvc_php/cliente">Clientes</a></li>
        <li><a href="/mvc_php/usuario">Usuarios</a></li>
        </ul>
    </div>
</body>
</html>
<?php

$subRota = $caminho[1] ?? null; 

require_once './models/produto.php'; 

switch ($subRota) {
    case '': // Página principal de produtos 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nomeProduto'], $_POST['precoProduto'], $_POST['quantidadeProduto'])) {
                $dadosProduto = [
                    'nome' => trim($_POST['nomeProduto']),
                    'preco' => trim($_POST['precoProduto']),
                    'quantidade' => trim($_POST['quantidadeProduto'])
                ];

                $produto = new Produto;
                $resultado = $produto->Cadastro($dadosProduto);

                if ($resultado['status']) {
                    header('Location: /produtos');
                    exit;
                } else {
                    foreach ($resultado['erros'] as $erro) {
                        echo "<p style='color:red;'>Erro: $erro</p>";
                    }
                }
            } else {
                echo "<p style='color:red;'>Dados incompletos no formulário.</p>";
            }
        }

        $produto = new Produto;
        $dados = $produto->queryAll();
        require './views/produtos/consultaProdutos.php';
        break;

    case 'cadastro':
        $produto = new Produto;// PRODUTO

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nomeProduto'], $_POST['precoProduto'], $_POST['quantidadeProduto'])) {
                $dados = [
                    'nome' => trim($_POST['nomeProduto']),
                    'preco' => trim($_POST['precoProduto']),
                    'quantidade' => trim($_POST['quantidadeProduto'])
                ];

                $resultado = $produto->Cadastro($dados);

                if ($resultado['status']) {
                    header('Location: /produtos');
                    exit;
                } else {
                    foreach ($resultado['erros'] as $erro) {
                        echo "<p style='color:red;'>$erro</p>";
                    }
                }
            }
        }

        require './views/produtos/cadastroProduto.php';
        break;

        default:
        if (preg_match('/^produto\/([0-9]+)$/', $url, $matches)) {
            $id = $matches[1];

            require './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryOne([":idProduto" => $id]);
            require './views/produtos/consultaProduto.php';

        }
        break;
}