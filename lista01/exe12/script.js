var numeros_sorteados = new Array(6);

for (let i=0; i<6; i++) {
    numeros_sorteados[i] = prompt("Digite o numero " + i + " sorteado: ")
}

document.write("<p>Números sorteados: " + numeros_sorteados + "</p>")

var numeros_apostados = new Array(6);

for (let i=0; i<6; i++) {
    numeros_apostados[i] = prompt("Digite o numero " + i + " apostado: ")
}

document.write("<p>Números apostados: " + numeros_apostados + "</p>")

var acertos = numeros_apostados.filter(function(e, i) {
    return e == numeros_sorteados[i]
}).length

document.write("<p>Total de acertos: " + acertos + "</p>")