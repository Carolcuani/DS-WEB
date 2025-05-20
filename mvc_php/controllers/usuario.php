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
        <li><a href="/mvc_php/produto">Produtos</a></li>
        <li><a  href="/mvc_php/cliente">Clientes</a></li>
        <li><a class="link-usuario active" href="/mvc_php/usuario">Usuarios</a></li>
        
        </ul>
    </div>
</body>
</html>


<?php
$subRota = $caminho[1] ?? null; //Verifica se há algo na segunda rota


switch($subRota){
    case '':
        if (count($_POST) > 0 && isset ($_FILES['fotoUsuario'])){
            extract($_POST);
            require_once './models/usuario.php';
            $usuario = new Usuario;
            $usuario->atualizaCadastro([':nomeUsuario' => $nomeUsuario, 
                                        ':emailUsuario' => $emailUsuario,
                                        ':senhaUsuario' => $senhaUsuario ],
                                        $_FILES);

        }
        require_once './models/usuario.php';
        $usuario = new Usuario;
        $dados = $usuario->queryOne([':idUsuario' => 1]);
        require './views/usuarios/usuario.php';
        break;


    default:
        break;
    }
