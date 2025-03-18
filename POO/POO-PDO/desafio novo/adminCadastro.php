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
            <label>Nome: </label>
            <input type="text" name="nome">
            <br>
            <label>Cargo: </label>
            <input type="text" name="cargo">
            <br>
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
        $login = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $stmt = $db->prepare("SELECT * FROM administrador WHERE nome = '$login' and senha = '$senha' and cargo = '$cargo' and email = '$email'");
        $stmt->bindParam(':nome', $login);
        $stmt->bindParam(':senha', $senha); 
        $stmt->bindParam(':cargo', $cargo); 
        $stmt->bindParam(':email', $email); 
        


        // Verifica se há registros
        if (mysqli_num_rows($resultado) > 0) {
            //Converte em Array Associativo
            $linha = mysqli_fetch_assoc($resultado);
            //Grava os dados na sessão
            $_SESSION['login'] = $linha['nome'];
            $_SESSION['senha'] = $linha['senha'];
            $_SESSION['cargo'] = $linha['cargo'];
            $_SESSION['email'] = $linha['email'];


        }else{
            $_SESSION['erro'] = "Login ou senha invalida";
        }

    }

    if(isset($_SESSION['login']) and isset($_SESSION['senha']) and  isset($_SESSION['cargo']) and  isset($_SESSION['email'])){
        echo '<br>';
        echo $_SESSION['login'];
        echo '<br>';
        echo $_SESSION['senha'];
        echo '<br>';
        echo $_SESSION['cargo'];
        echo '<br>';
        echo $_SESSION['email'];


    }


    session_start();
    session_destroy();
    

?>