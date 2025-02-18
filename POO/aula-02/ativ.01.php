<?php

class Pessoa{

    private $idade;
    public $nome;
}

class funcionario extends Pessoa {

    protected $salario;

    public function setSalario($valor){
        $this->salario = $valor;
    }

    public function calcularBonus(){
        $this->salario = ($this->salario * 10) /100;
        return "O salário com o bonus é: ".$this->salario;
    }
}
class gerente extends funcionario{

    public function calcularBonus(){
        $this->salario = ($this->salario * 20) /100 + $this->salario;
        return "O salário do gerente com o bonus é: ".$this->salario;
    }  
}
class desenvolvedor extends funcionario{
    public function calcularBonus(){
        $this->salario = ($this->salario * 10) /100 + $this->salario;
        return "O salário do desenvolvedor com o bonus é: ".$this->salario;
    }  
}


echo "Atividade 01: Salarios";
echo "<br>", "<br>", "<br>";

$ana = new gerente();

$ana->setSalario(5000);
echo $ana->calcularBonus();
echo "<br>";

$bruno = new desenvolvedor();

$bruno->setSalario(3000);
echo $bruno->calcularBonus();