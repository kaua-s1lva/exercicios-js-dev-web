var data = new Date()

var hora = data.getHours()

if (hora >= 6 && hora < 12) {
    document.write("Agora é de manhã")
    document.bgColor = "white"
    document.fgColor = "black"
} else if (hora >= 12 && hora < 18) {
    document.write("Agora é de tarde")
    document.bgColor = "yellow"
    document.fgColor = "black"
} else if (hora >= 18 && hora < 24) {
    document.write("Agora é de noite")
    document.bgColor = "gray"
    document.fgColor = "white"
} else {
    document.write("Agora é de madrugada")
    document.bgColor = "blue"
    document.fgColor = "white"
}