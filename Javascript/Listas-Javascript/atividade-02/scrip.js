function alertaDeClique(){
    var numero=document.getElementById("numero").value;
    document.getElementById("Resultado");

    if (numero % 2 ==0 ){
        Resultado.innerHTML="O numero " + numero + " é par";

    }
    else {
        Resultado.innerHTML="O numero " + numero + " é ímpar";
    }
} 