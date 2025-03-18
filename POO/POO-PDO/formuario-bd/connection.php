<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'pratica';

// Conectar ao banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}

echo "Conexão bem-sucedida!";


echo "<h4>Inserindo dados</h4>";




?>