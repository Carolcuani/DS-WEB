<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png"href="./assets/img/icon.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class="menu">
<ul>
        <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu meumenu-active" title="Clients">Clientes </a></li>
        <li><a href="produto.php" class="meumenu" title="Products">Produtos </a></li>
        <li><a href="vendas.php" class="meumenu" title="Sales">Vendas </a></li>
    </ul>
</div>

    <div class ="container">  <!-- para criar um divisão, guardar tudo junto e facilitar o css-->
    <hr> <!--linha embaixo-->

    <?php

        if($_SERVER['REQUEST_METHOD'] != 'GET' OR !isset($_GET['id'])){
            header("Location: Cliente.php");
        }
        include 'conexao.php';

        $id = $_GET['id'];
       
        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt -> bindParam(':id',$id);
        $stmt -> execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);//Todos os registros retornados

       
            $idCliente = $dados['id'];
            $nomeCliente = $dados['nome'];
            $emailCliente = $dados['email'];
            $observacaoCliente = $dados['observacao'];


?>
        <div class="formulario">
            <form action="clienteUpdate.php?id= <?=$idCliente;?>" method="POST" name="formulario" onsubmit="return validarDadosClientes()">
                <h1>FORMULÁRIO:</h1>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value=" <?= $nomeCliente;?>">
                <p class ="erro-input" id="erro-nome"></p>


                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" value=" <?= $emailCliente;?>">
                <p class ="erro-input" id="erro-email"></p>


                <label for="observacao">Observação do cliente:</label>
                <textarea name="observacao" cols="30" rows="4" id="observacao"> <?= $observacaoCliente?></textarea>
                <p class ="erro-input" id="erro-observacao"></p>

                <br><br>
                <input type="Submit" >
            </form>
        </div>
        

    

</div>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/b1a26aa984.js" crossorigin="anonymous"></script>
</body>
</html>
    
