
        // Obtendo o botão e o elemento de exibição do contador
        let contador = 0;
        const contadorBtn = document.getElementById('contadorBtn');
        const contadorExibicao = document.getElementById('contador');

        // Função que incrementa o contador e atualiza a exibição
        contadorBtn.addEventListener('click', () => {
            contador++;
            contadorExibicao.textContent = contador;
        })