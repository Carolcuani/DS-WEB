function alertaDeClique(){
    var number = document.getElementById("idade").value
    var Resultado = document.getElementById("Resultado");

    number = Number.parseInt(number);


    if (number > 18 || number === 18  ){
        Resultado.innerHTML="Ele é maior de idade"

    }
    else {
        Resultado.innerHTML="Ele é menor de idade"

    }
}