<?php 

class Computador {
    
    //atributos
        public $cor, $tamanho, $estilo, $versao, $usabilidade;

    //metodo
        public function programar (){}
        public function escrever (){}
        public function trabalhar (){}
}

////////////////////////////////////////////////////////////////////////

class Vestido {
    
    //atributos
        public $cor, $tamanho, $estilo, $comprimento, $estampa;

    //metodo
        public function vestir (){}
        public function usar (){}
        public function colocar (){}
}

////////////////////////////////////////////////////////////////////////

class Lobo {
    
    //atributos
        public $cor, $tamanho, $idade, $pelagem, $altura;

    //metodo
        public function correr (){}
        public function cacar (){}
        public function uivar (){}
        public function comer (){}
        public function dormir (){}
}

////////////////////////////////////////////////////////////////////////

class Volei {
    
    //atributos
        public $estilo, $quantidade, $tamanho, $lugar, $cor;

    //metodo
        public function jogar (){}
        public function saltar (){}
        public function atacar (){}
        public function defender (){}
}

////////////////////////////////////////////////////////////////////////

class Celular {
    
    //atributos
        public $cor, $tamanho, $estilo, $usabilidade, $marca;

    //metodo
        public function usar (){}
        public function trabalhar (){}
        public function escrever (){}
}

////////////////////////////////////////////////////////////////////////////////

class Conta  {
    
    //atributos
        public $numero, $titular, $saldo;
        
    //metodo
        public function exibirSaldo (){
            return "O saldo é: R$".$this->saldo.",00";
        }
        public function deposito ($deposito){
            $this->saldo += $deposito;
            return "Esse é o novo saldo: ".$this->saldo;
        }
        public function sacar ($saque){
            $this->saldo -= $saque;
            return "O novo saldo é: ".$this->saldo;
        }}


    //minha conta/////////////////////////////////////////////////////////////////
        echo "Minha conta","<br>";
        $minha_conta = new Conta(); //inicio do objeto
        $minha_conta->numero = "332";
        $minha_conta->titular = "Anna Maria";
        $minha_conta->saldo = "123000";

        echo ("O numero da conta é: "),$minha_conta->numero;
        echo "<br>";
        echo ("O titular da conta é: "),$minha_conta->titular;
        echo "<br>";
        echo ("O saldo da conta é: "),$minha_conta->saldo;
        echo "<br>";
        echo $minha_conta->sacar(200);
        echo "<br>","<br>";


    //nossa conta//////////////////////////////////////////////////////////////////
        echo "Nossa conta","<br>";
        $nossa_conta = new Conta(); //inicio do objeto
        $nossa_conta->numero = "832";
        $nossa_conta->titular = "Eduardo e Monica";
        $nossa_conta->saldo = "3000";

        echo ("O numero da conta é: "),$nossa_conta->numero;
        echo "<br>";
        echo ("O titular da conta é: "),$nossa_conta->titular;
        echo "<br>";
        echo ("O saldo da conta é: "),$nossa_conta->saldo;
        echo "<br>";
        echo $nossa_conta->sacar(200);
        echo "<br>","<br>";



    //sua conta//////////////////////////////////////////////////////////////////////
        echo "Sua conta","<br>";
        $sua_conta = new Conta(); //inicio do objeto
        $sua_conta->numero = "452";
        $sua_conta->titular = "Manuel" ;
        $sua_conta->saldo = "12000" ;

        echo ("O numero da conta é: "),$sua_conta->numero;
        echo "<br>";
        echo ("O titular da conta é: "),$sua_conta->titular;
        echo "<br>";
        echo ("O saldo da conta é: "),$sua_conta->saldo;
        echo "<br>";
        echo $sua_conta->sacar(200);
        echo "<br>";


?>

