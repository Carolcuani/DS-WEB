<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST">
            <h1>Login:</h1>
            <label>Email: </label>
            <input type="text" name="email">
            <br>
            <label>Senha: </label>
            <input type="text" name="senha">
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>

<?php
    session_start();


    //Verifica se veio do Formulário
    if(isset($_POST['login'])){
        //Verifica se o login esta correto
        include_once('conexao.php');
        
        $login = $_POST['email'];
        $senha = $_POST['senha'];


        $stmt = $db->prepare("SELECT * FROM administrador WHERE email = :login and senha = :senha ");
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha); 
        $stmt->execute();


        // Verifica se há registros
        if ($stmt->rowCount() > 0) {
            //Converte em Array Associativo
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            //Grava os dados na sessão
            $_SESSION['login'] = $linha['nome'];
            $_SESSION['senha'] = $linha['senha'];
            $_SESSION['cargo'] = $linha['cargo'];
            $_SESSION['email'] = $linha['email'];


        }else{
            $_SESSION['erro'] = "Login ou senha invalida";
        }

            header("Location: index.php");
    }

?>