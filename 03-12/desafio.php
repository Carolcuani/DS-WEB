<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO</title>
    <link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
   
    <form action="insertion.php" method="POST">
        <h1>PRODUTO:</h1>
        <label >Nome:</label>
        <input type="text" name="nome">
        <br>
        <label >Valor: </label>
        <input type="number" name="valor">
        <br>
        <label >Estoque:</label>
        <input type="number" name="estoque">
        <br>
        <input type="submit">
    </form>
   

    <br><br><br>

    <div class="form">
        <form action="insertion.php" method="POST">
            <H1>CLIENTE:</H1>
            <label >Nome: </label>
            <input type="text" name="nome">
            <br>
            <label >Email: </label>
            <input type="text" name="email">
            <br>
            <input type="submit">
        </form>
    </div>
    

    <?php



    //PRODUTO
    include_once('conexao.php');
    
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query($conexao, $sql);
    "<br><br>";

    // Verificar se há registros
    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            "<br><br>";
            echo "nome: " . $linha['nome'] ."<br>";
    
    }} else {
        echo "Nenhum registro encontrado.", "<br><br>";
    }
    



    //CLIENTE
    include_once('conexao.php');
    
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query($conexao, $sql);
    "<br><br>";

    // Verificar se há registros
    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            "<br><br>";
            echo "nome: " . $linha['nome'] ."<br><br>";
    
    }} else {
        echo "Nenhum registro encontrado.","<br><br>";
    }




    ?>
</body>
</html>