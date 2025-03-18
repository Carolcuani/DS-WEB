<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg"> <!--Colocar icone na pag index-->
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>

<div class="menu">
    <ul>
        <li><a href="#" class="meumenu meumenu-active" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clientes </a></li>
        <li><a href="#" class="meumenu" title="Products">Produtos </a></li>
        <li><a href="#" class="meumenu" title="Sales">Vendas </a></li>
    </ul>
</div>

    <div class ="container">  <!-- para criar um divisão, guardar tudo junto e facilitar o css-->
    <hr> <!--linha embaixo-->
    <h1>Dashboard</h1>
    <p>A Dashboard se encontra em desenvolvimento, os dados processados até o momento são:</p>
      
    

    <?php
        include 'conexao.php';
        
        $dados  = $db->query("SELECT * FROM clientes");
        echo "Quantidade de clientes cadastrados: " .$dados->rowCount();//Conta a quantidade de linhas que vai vir da função acima


    
    ?>
    
</div>
<script src="./assets/js/script.js"></script>
</body>
</html>
    