function alertaDeClique(){
    var nome = document.getElementById("nome").value
    var senha = document.getElementById("senha").value
    var Resultado = document.getElementById("Resultado");

    senha = Number.parseInt(senha);


    if (nome === "admin" && senha === 12345){
        Resultado.innerHTML="Seja Bem-vindo"

    }

    else {
        Resultado.innerHTML="ERRO" 
    
    }
}