console.log("Olá mundo");

//Alerta o usuario (alert) 
window.alert("Bom dia, Mundo!!!");

//Função de receber uma informação vinda do usuário (prompt)
    var primeiro = prompt("Didite seu primeiro nome");
    var segundo = prompt("Didite seu segundo nome");
    alert(primeiro + segundo)


//Tentativa de adição
var soma1 = Number.parseInt(prompt("Digite o primeiro numero para adição"))
var soma2 = Number.parseInt(prompt("Digite o segundo numero para adição"))
//Verificando o tipo de variavel 
alert(soma1 + soma2)



//Tentativa de subtração
var sub1 = Number.parseInt(prompt("Digite o primeiro numero para subtração"))
var sub2 = Number.parseInt(prompt("Digite o segundo numero para subtração"))
//Verificando o tipo de variavel 
alert(sub1 - sub2)



//Tentativa de multiplicação
var mult1 = Number.parseInt(prompt("Digite o primeiro numero para multiplicação"))
var mult2 = Number.parseInt(prompt("Digite o segundo numero para multiplicação"))
//Verificando o tipo de variavel 
alert(mult1 * mult2)


//Tentativa de divisão
var div1 = Number.parseInt(prompt("Digite o primeiro numero para a divisão"))
var div2 = Number.parseInt(prompt("Digite o segundo numero para a divisão"))
//Verificando o tipo de variavel 
alert(div1 / div2)


//Tentativa de retorno do cubo do numero
var cubo_do_numero = Number.parseInt(prompt("Digite um numero para retornar o cubo dele:"))
//Verificando o tipo de variavel 
alert(cubo_do_numero ** 3)


//Tentativa de conversão de uma temperatura
var temperatura = Number.parseInt(prompt("Digite uma temperatura em F para ser transformada em °C:"))
//Verificando o tipo de variavel 
alert((temperatura - 32) * (5/9) + "°C")


//Tentativa de retorno de investimento
var capital = Number.parseInt(prompt("Digite a capital inicial:"))
var tempo = Number.parseInt(prompt("Digite o tempo em meses:"))
var taxa = Number.parseInt(prompt("Digite a taxa de juros mensal:"))
//Verificando o tipo de variavel 
var montante = (capital * ((1+(taxa/100)) ** tempo)) 
alert ("O montante é: " + montante.toFixed(2) )