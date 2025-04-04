<?php
if (count($data['produtos']) === 0) {
    throw new Exception("Nenhum produto foi enviado");
}

foreach ($data['produtos'] as $produto) {
    if (empty($produto['id'])) {
        throw new Exception("ID do produto é obrigatório");
    }
    
    if (empty($produto['nome'])) {
        throw new Exception("Nome do produto é obrigatório");
    }
    
    if (!isset($produto['quantidade']) || $produto['quantidade'] <= 0) {
        throw new Exception("Quantidade do produto deve ser maior que zero");
    }
    
    if (!is_numeric($produto['preco']) || $produto['preco'] <= 0) {
        throw new Exception("Preço do produto deve ser um número positivo");
    }
}
?>