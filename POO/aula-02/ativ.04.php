<?php

abstract class Produto {
    public $nome = "Vestido";
    public $preco = 75.00;
    protected $estoque = 2;

    public function getPrecoFinal() {
        $precoFinal = $this->preco;


        if ($this->estoque < 5) {
            $precoFinal *= 0.90;
        }

        return $precoFinal;
    }
}

class Eletronico extends Produto {
    public function getPrecoFinal() {
        $precoFinal = parent::getPrecoFinal() * 0.90;
        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function getPrecoFinal() {
        $precoFinal = parent::getPrecoFinal() * 0.80;
        return $precoFinal;
    }
}

echo "O eletrônico é: R$ " . (new Eletronico())->getPrecoFinal() . "<br>";
echo "A roupa é: R$ " . (new Roupa())->getPrecoFinal() . "<br>";
?>
