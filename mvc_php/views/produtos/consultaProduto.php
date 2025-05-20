<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_php/assets/css/style.css">


    <h1>Produtos cadastrados</h1>

    <table class="produtos">
        <tr>
            <th>Nome: </th>
            <th>Preço: </th>
            <th>Estoque: </th>
        <tr>


    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                echo "<td>$nomeProduto</td>";
                echo "<td>$precoProduto</td>";
                echo "<td>$estoqueProduto</td>";
            echo "<tr>";
        }
    ?>




<table>
    <div class="button-edit-voltar">
        <a href="/mvc_php/produtos/consultaProdutos.php"><button>Voltar</button></a>
    </div>
</table>