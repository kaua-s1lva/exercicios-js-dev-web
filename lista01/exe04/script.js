function converterMesEmString(mes) {
    var nomeMes

    switch (mes) {
        case 1: nomeMes = "janeiro"; break
        case 2: nomeMes = "fevereiro"; break
        case 3: nomeMes = "março"; break
        case 4: nomeMes = "abril"; break
        case 5: nomeMes = "maio"; break
        case 6: nomeMes = "junho"; break
        case 7: nomeMes = "julho"; break
        case 8: nomeMes = "agosto"; break
        case 9: nomeMes = "setembro"; break
        case 10: nomeMes = "outubro"; break
        case 11: nomeMes = "novembro"; break
        case 12: nomeMes = "dezembro"; break
    }

    return nomeMes
}

var data_input = prompt("Digite a data no formato DD/MM/YYYY")

var data = data_input.split("/")
var dia = parseInt(data[0])
var mes = parseInt(data[1])
var ano = parseInt(data[2])

console.log(mes)

document.write(dia + " de " + converterMesEmString(mes) + " de " + ano)
