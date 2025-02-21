function alertaDeClique(){
    var n1 = document.getElementById("n1").value
    var n2 = document.getElementById("n2").value
    var operacao = document.getElementById("operacao").value
    var Resultado = document.getElementById("Resultado");
    var Resultadoo;

    n1 = Number.parseFloat(n1);
    n2 = Number.parseFloat(n2);


    if (operacao == 1 ){
        Resultadoo = n1+n2;
    }
    if (operacao == 2 ){
        Resultadoo = n1-n2;
    }

    if (operacao == 3 ){
        Resultadoo = n1/n2;
    }
    if (operacao == 4 ){
        Resultadoo = n1*n2;
    }

    Resultado.innerHTML = `Resultado: ${Resultadoo}`;
}