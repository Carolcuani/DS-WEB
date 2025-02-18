<?php
abstract class Animal {
    public function falar(){}
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar() {
        echo "Au-Au";
    }
}


class Gato extends Animal {

    public function falar(){
        return "Miau";
    }

}

class Passaro extends Animal {

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }

}

echo "Atividade 02: animais";
echo "<br>", "<br>";

//cao
$max = new Cachorro();
echo ("O cachorro faz: "), $max->falar() . "<br/>";
echo ("E ele "), $max->mover() . "<br/>","<br/>";

//gato
$bento = new Gato();
echo ("O gato faz: "), $bento->falar() . "<br/>";
echo ("E ele "), $bento->mover() . "<br/>","<br/>";

//passaro
$picaPau = new Passaro();
echo ("O passaro faz: "), $picaPau->falar() . "<br/>";
echo("E ele "), $picaPau->mover() . "<br/>","<br/>";

?>