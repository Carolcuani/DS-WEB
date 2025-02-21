function alertaDeClique(){
    var n1 = document.getElementById("n1").value
    var n2 = document.getElementById("n2").value
    var n3 = document.getElementById("n3").value
    var Resultado = document.getElementById("Resultado");

    n1 = Number.parseFloat(n1);
    n2 = Number.parseFloat(n2);
    n3 = Number.parseFloat(n3);


    if ((n1 == n2) && (n1 == n3) ){
        Resultado.innerHTML ="É um triangulo equilatero";
    }

    else if (n1 == n2 ){
        Resultado.innerHTML ="É um triangulo isoceles";
    }

    else if ((n1 != n2) && (n1 != n3) ){
        Resultado.innerHTML ="É um triangulo escaleno";
    }
}