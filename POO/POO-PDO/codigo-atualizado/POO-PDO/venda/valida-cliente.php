<?php
if (empty($data['cliente']['idCliente'])) {
    throw new Exception("ID do cliente é obrigatório");
}

if (!is_numeric($data['cliente']['idCliente'])) {
    throw new Exception("ID do cliente deve ser numérico");
}

if (empty($data['cliente']['nomeCliente'])) {
    throw new Exception("Nome do cliente é obrigatório");
}

?>