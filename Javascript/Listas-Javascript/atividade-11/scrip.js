function alertaDeClique(){
    var n1 = document.getElementById("n1").value
    var n2 = document.getElementById("n2").value
    var n3 = document.getElementById("n3").value
    var Resultado = document.getElementById("Resultado");

    n1 = Number.parseFloat(n1);
    n2 = Number.parseFloat(n2);
    n3 = Number.parseFloat(n3);


    if (n1 > n2 && n1 > n3 ){
        Resultado.innerHTML ="O numero maior é o: " + n1;
    }

    if (n2 > n1 && n2 > n3 ){
        Resultado.innerHTML ="O numero maior é o: " + n2;
    }
    if (n3 > n1 && n3 > n2 ){
        Resultado.innerHTML ="O numero maior é o: " + n3;
    }

    Resultado.innerHTML = `Resultado: ${Resultadoo}`;
}