var a = window.document.getElementById('area');
a.addEventListener('mouseenter', entrar);
a.addEventListener('mouseout', sair);

function entrar(){
    a.innerText = 'Entrou!';
    a.style.background = 'red';
    area.style.width='500px';

    }


function sair(){
    a.innerText = 'Saiu!';
    a.style.background = 'blue';
    area.style.width='300px';
    }
    