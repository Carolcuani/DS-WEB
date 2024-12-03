<?php
    //Inclou minha conexão com o banco de dados
    include_once('conexao.php');

 
    $nome = $_POST ['nome'];
    $valor = $_POST ['valor'];
    $estoque = $_POST ['estoque'];

    //Inicio da Inserção de Dados (INSERT)

    $sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$nome', '$valor', '$estoque')";


    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!";
        header('Location: desafio.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }

?>