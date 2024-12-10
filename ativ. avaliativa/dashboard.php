<?php
session_start();


if(!isset($_SESSION['login']) and !isset($_SESSION['senha'])){
    header('Location: index.php');
}

$username = isset($_SESSION['user']) ? $_SESSION['user'] : $_COOKIE['user'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    
</head>
<body>
   


    <h1>Seja bem vindo a nossa floricultura!!</h1>
    <h3>Acesse os botões abaixo para navegar em nossa plataforma</h3>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>

    
    <form action="cookie.php" method="post">
        <button type="submit">Salvar Cookie</button>
    </form>

    <form action="login.php" method="post">
        <button type="submit">Ir a pag de cadastro</button>
    </form>


</body>
</html>
