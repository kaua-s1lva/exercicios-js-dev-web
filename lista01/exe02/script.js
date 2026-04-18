var a, b;

while (true) {
    a = parseFloat(prompt("Digite o primeiro número: "))
    if (isNaN(a)) {
        window.alert("Digite um número válido")
    } else {
        break
    }
}

while (true) {
    b = parseFloat(prompt("Digite o segundo número: "))
    if (isNaN(b)) {
        window.alert("Digite um número válido")
    } else {
        break
    }
}

function gerarTabela() {
    var operacoes = [" + ", " * ", " / ", " % "]

    var tabela = document.getElementById("tabela")

    for (var i=0; i<4; i++) {
        var linha = document.createElement("tr")
    
        var celula_a = document.createElement("td")
        var celula_b = document.createElement("td")
    
        var texto_a = document.createTextNode(a + operacoes[i] + b)
        var texto_b = document.createTextNode(calcular(operacoes[i]).toFixed(2))
    
        celula_a.appendChild(texto_a)
        celula_b.appendChild(texto_b)
    
        linha.appendChild(celula_a)
        linha.appendChild(celula_b)
    
        tabela.appendChild(linha)
    }
}

function calcular(operacao) {
    if (operacao == " + ") {console.log(a); return a + b}
    if (operacao == " * ") return a * b
    if (operacao == " / ") return a / b
    if (operacao == " % ") return a % b
}