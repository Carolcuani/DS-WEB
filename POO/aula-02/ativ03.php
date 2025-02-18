<?php

class Veiculo {
    public $marca = "mercedes";
    public $modelo = "A500";
    private $velocidade = "180km";


    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade) {
        $this->velocidade = $velocidade;
    }
    
    public function exibirInformacoes() {
        echo "A marca é: " . $this->marca . "<br>";
        echo "O modelo é: " . $this->modelo . "<br>";
        echo "A velocidade é: " . $this->velocidade . "<br>";
    }
}

class Carro extends Veiculo {
    public function Acelerar() {
        return "Acelerar em 50km\n";
    }
}

class Moto extends Veiculo {
    public function Acelerar() {
        return "Acelerar em 20km\n";
    }
}

$carro = new Carro();
$moto = new Moto();
echo "<br>", "<br>";


echo "Carro: ","<br>" ;
$carro->exibirInformacoes();
echo $carro->Acelerar();
echo "<br>", "<br>";


echo "Moto: ","<br>";
$moto->exibirInformacoes();
echo $moto->Acelerar();

?>