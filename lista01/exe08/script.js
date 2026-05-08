var string = prompt("Digite a mensagem: ")
var caracter = prompt("Digite o caracter: ")

var posicao = string.lastIndexOf(caracter)

document.write("A última posição do caracter na mensagem é: " + posicao)