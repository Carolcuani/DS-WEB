function alertaDeClique(){
    var number = document.getElementById("number").value
    var Resultado = document.getElementById("Resultado");

    number = Number.parseInt(number);


    if (number > 0){
        Resultado.innerHTML="Ele é um numero positivo"

    }
    if (number ===0) {
        Resultado.innerHTML="Ele é zero"

    }

    if (number < 0 ) {
        Resultado.innerHTML="Ele é um numero negativo"
    }
}