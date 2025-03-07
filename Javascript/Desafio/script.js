function adicionar() {

    var cartaoInput = document.getElementById("cartaoInput");
    var nome = cartaoInput.value.trim(); // Remove espaços 

    var descricaoInput = document.getElementById("descricaoInput");
    var descricao = descricaoInput.value.trim(); // Remove espaços 

   

    if (nome !== "" && descricao !== "") {

        var cartao = document.createElement("div");
        cartao.setAttribute("class", "cartao");


        var cartaoTitulo = document.createElement("h3");
        cartaoTitulo.textContent = nome;
        cartao.appendChild(cartaoTitulo);


        var cartaoDescricao = document.createElement("p");
        cartaoDescricao.textContent = descricao;
        cartao.appendChild(cartaoDescricao);


//////////////////////////////////////////////////////////////////////////////////////////////
  
        var excluir = document.createElement("button");// excluir
        excluir.textContent = "Excluir";
        excluir.onclick = function() {
            cartao.remove(); // Remove
        };
        cartao.appendChild(excluir);


/////////////////////////////////////////////////////////////////////////////////////


        var lista = document.getElementById("Lista"); //add
        lista.appendChild(cartao);


//////////////////////////////////////////////////////////////////////////////////////


        cartaoInput.value = "";// limpar
        descricaoInput.value = "";
    } 
    
}



